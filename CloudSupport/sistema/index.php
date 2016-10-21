<!DOCTYPE html>
<?php

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
ini_set('session.use_trans_sid', 0);
error_reporting(E_ALL);

session_start();
session_cache_expire(1800);
session_cache_limiter('private');

if(!$_SESSION['acessoLiberado']){
    header("Location: ../acesso.php");
}


$hora = date('H');
$min = date('i');
$seg = date('s');

$tempoAgora = mktime($hora, $min, $seg);
$_SESSION['tempo_permitido'] = mktime($hora, $min, $seg);

$segundos=(is_numeric($_SESSION['tempo_permitido']) and is_numeric($tempoAgora)) ? ($tempoAgora-$_SESSION['tempo_permitido']):false;

define('TEMPO_LOGADO',30);

if($segundos > TEMPO_LOGADO){
    $_SESSION['nomeUsuario'] = '';
    $_SESSION['idUsuario'] = '';
}

//session_cache_limiter('private');
//$sessaoCache = session_cache_limiter();
//
//session_cache_expire($tempo);
//$sessionExpire = session_cache_expire();

require_once "../conection/conexao.php";
require_once "../classes/classeUsuario.php";
require_once "../classes/classePerfil.php";
require_once "../classes/classeCliente.php";
require_once "../classes/classeTipoAcesso.php";
require_once "../classes/classeStatus.php";
require_once "../controller/constantes.php";
require_once "../view/vMenu.php";

$logoff = filter_input(INPUT_GET, 'saida');
$opcao = filter_input(INPUT_GET, 'opcao');

if($logoff){
    session_unset();
    session_destroy();
    header("Location: ../acesso.php");
}

$conexao = new conexao();
$conexao->getConnectionLocal();

$idUsuario = $_SESSION['idUsuario'];

$usuario = new classeUsuario();
$usuario->setIdUsuario($idUsuario);
$dadosUsuario = $usuario->consultaDadosUsuario();// Busca informações sobre o usuário.

$_SESSION['acesso'] = $dadosUsuario['tipoAcesso'];


?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../../images/iconMapti.ico">
    <link rel="icon" type="image/png" href="../../images/iconMapTI24x24.png">

    <title>MAP TI - Cloud Support</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-submenu.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link href="../../css/estilo.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="js/commands.js"></script>

    
</head>

<body>

    <?php
    
    $menu = new vMenu();
    $menu->menu();

    ?>

    
    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            
            <?php
//                switch ($opcao){
//                    case "usuarios":
//                        echo "<img src='../../images/CloudSupportTelaInicial.png' title='Cloud Support - MAP TI'><br/><br/>";
//                        break;
//                }
            ?>
            
            <label class="text-info" style="color: #fff; background-color: rgba(0,0,0,.7); width: 350px; height: 30px;">Usuário logado: <?php echo $dadosUsuario['nomeUsuario']; ?> - Empresa: <?php echo $dadosUsuario['nomeCliente']; ?></label>
            <br/><br/>

        
        <?php
            switch ($opcao){
                case "":
                    $usuario->telaBoasVindas();
                    break;
                default:
                    $usuario->telaBoasVindas();
                    break;
                case "usuarios":
                    $usuario->telaUsuarios();
                    break;
                case "alterausuarios":
                    $idDoUsuario = filter_input(INPUT_GET, 'id');
                    
                    $usuario->telaAlteraUsuarios($idDoUsuario);
                    break;
                case "seuperfil":
                    $perfil = new classePerfil();
                    $perfil->setIdUsuarioPerfil($_SESSION['idUsuario']);
                    $perfil->telaPerfil();
                    break;
            }
        
        ?>
        </div>

    </header>

    <!-- Modal -->
    <script src="js/modal.js"></script>
    <script src="js/bootstrap-modal.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/bootstrap-submenu.min.js"></script>
    
    <script>
        function abreSubMenu(){
            var m = document.getElementById('subMenu');
            
            if(m.style.display == 'block'){
                m.style.display='none';
            }else{
                m.style.display='block';
            }
            
        }
    </script>
    
    <!-- Custom Theme JavaScript -->
    <script>
        
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    
</body>

</html>
