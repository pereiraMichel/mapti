<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once './classes/telas.class.php';
require_once './classes/xml.class.php';

error_reporting(0);

$tela = new telas();

session_start();

$_SESSION['autorizado'] = false;

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

$erro = (int) filter_input(INPUT_GET, 'erro');

/* @var $_POST type */
//$nomeMail = utf8_decode(filter_input(INPUT_POST, 'login'));
//$senha = utf8_decode(filter_input(INPUT_POST, 'senha'));
//
//$login = addslashes($nomeMail);
//$pass = addslashes($senha);
//
//if (strlen($login) != 0 || strlen($pass) != 0) {
//    $acesso = new classeAcesso();
//    
//    $acesso->setLogin($login);
//    $acesso->setSenha($pass);
//    
//    if($acesso->validaUsuario()){
//
//        $_SESSION['login'] = $login;
//        $_SESSION['idUsuario'] = $acesso->getIdUsuario();
//        
//        $_SESSION['acessoLiberado'] = true;
//        
////        echo "Login: ".$_SESSION['login']."<br>";
////        echo "Id do Usuário: ".$_SESSION['idUsuario']."<br>";
////        echo "Acesso Liberado: ".$_SESSION['acessoLiberado']."<br>";
//        
//        if(!empty($_SESSION['idUsuario'])){
//            header("Location: sistema/index.php");
//        }
////        header("Location: sistema/index.php?a=".base64_encode($_SESSION['acessoLiberado']));
//    }else{
//        header("Location: acesso.php?erro=1");
//    }
//
//}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>MAP TI - CLOUD CONTRATOS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Michel - MAP TI">
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
                        $tela->telaSuperior();
                        ?>
                        <p style="height: 125px;">&nbsp;</p>
                        <!--<img src="../images/acessoRestritoMAPTI.png" width="250">-->
                        <div id="acessoRestrito">CLOUD CONTRATOS - MAP TI</div>
                        <p style="height: 10px;">&nbsp;</p>
                        <?php
                            $tela->login();
//                            echo $_SESSION['acessoLiberado'];
                            
                        ?>

<!--                        <br/>-->
                        <?php
                        switch ($erro) {
                            case 1: echo "<div class='text-center'><p id='logint'><font color='red'>Usuário e/ou senha inválido(s)</font></p></div>";
                                    echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index.php'>";
                                break;
                            case 2: echo "<div class='text-center'><p id='logint'><font color='red'>Selecione o tipo de usuário</font></p></div>";
                                    echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index.php'>";

                                break;
                        }
                        ?>


                    </div>
                    <div class="col-sm-4">
                        &nbsp;
                    </div>

                </div>

            </div>
        </div>

        <footer>
            <div class="col-sm-12">
                <div class="text-center">
                    <a href="../" class="label label-primary">Site MAP TI</a>&nbsp;&nbsp;&nbsp;
<!--                </div>
            </div>
            <div class="col-sm-12">
                <div class="text-center">-->
                    <label class="label label-primary">Cloud Contratos - Exclusividade MAP TI</label>
                </div>
            </div>
        </footer>        
    </body>
</html>
