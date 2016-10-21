<?php
//ACESSO RESTRITO

session_start();

$_SESSION['acessoLiberado'] = false;

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

require_once 'classes/classeLogin.php';
require_once 'classes/classeAcesso.php';
require_once 'conection/conexao.php';

$erro = (int) filter_input(INPUT_GET, 'erro');

/* @var $_POST type */
$nomeMail = utf8_decode(filter_input(INPUT_POST, 'login'));
$senha = utf8_decode(filter_input(INPUT_POST, 'senha'));

$login = addslashes($nomeMail);
$pass = addslashes($senha);

if (strlen($login) != 0 || strlen($pass) != 0) {
    $acesso = new classeAcesso();
    
    $acesso->setLogin($login);
    $acesso->setSenha($pass);
    
    if($acesso->validaUsuario()){

        $_SESSION['login'] = $login;
        $_SESSION['idUsuario'] = $acesso->getIdUsuario();
        
        $_SESSION['acessoLiberado'] = true;
        
//        echo "Login: ".$_SESSION['login']."<br>";
//        echo "Id do Usuário: ".$_SESSION['idUsuario']."<br>";
//        echo "Acesso Liberado: ".$_SESSION['acessoLiberado']."<br>";
        
        if(!empty($_SESSION['idUsuario'])){
            header("Location: sistema/index.php");
        }
//        header("Location: sistema/index.php?a=".base64_encode($_SESSION['acessoLiberado']));
    }else{
        header("Location: acesso.php?erro=1");
    }

}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>MAP TI - Acesso Restrito</title>

        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="../css/animate.min.css" rel="stylesheet"> 
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/lightbox.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/presets/preset1.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <link rel="shortcut icon" href="../images/iconMapti.ico">
        <link rel="icon" type="image/png" href="../images/iconMapTI24x24.png">
        
        
<?php
if ($erro != "") {
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=acesso.php'>";
}
?>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-image: url(../images/slider/dark-blue.jpg);
                background-repeat: no-repeat;
            }

            .form-signin {
                max-width: 400px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }
        </style>        

    </head>

    <body>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="text-center">
                    <div class="col-sm-4">
                        &nbsp;
                    </div>
                    <div class="col-sm-4">

                        <?php
                        $titulo = new classeLogin();
                        $titulo->telaSuperior();
                        ?>
                        <p style="height: 125px;">&nbsp;</p>
                        <!--<img src="../images/acessoRestritoMAPTI.png" width="250">-->
                        <div id="acessoRestrito">ACESSO RESTRITO</div>
                        <p style="height: 20px;">&nbsp;</p>
                        <?php
                            $titulo->telaLogin();
//                            echo $_SESSION['acessoLiberado'];
                            
                        ?>

                        <br/>
                        <?php
                        switch ($erro) {
                            case 1: echo "<div class='text-center'><br><p id='logint'><font color='red'>Usuário e/ou senha inválido(s)</font></p></div>";
                                break;
                        }
                        ?>


                    </div>
                    <div class="col-sm-4">
                        &nbsp;
                    </div>

                    <!--                <div class="col-sm-12 col-xs-12 col-md-12">
                                        <div class="text-center">
                                            <a href="../" target="_self" style="text-decoration: none;">
                                                <button class="btn btn-default btn-sm">
                                                    Voltar para o site
                                                </button>
                                            </a>
                                        </div>
                                    </div>-->
                </div>

            </div>
        </div>

        <footer>
            <div class="col-sm-12">
                <div class="text-center">
                    <a href="../" class="label label-primary">Voltar para o site</a>
                </div>
            </div>
            <div class="col-sm-12">
                &nbsp;
            </div>
            <div class="col-sm-12">
                <div class="text-center">
                    <label class="label label-primary">Acesso Restrito - MAP TI</label>
                </div>
            </div>
        </footer>        

    </body>
</html>



