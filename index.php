<?php

//use Telas;

require_once './classes/sendmessage.php';
require_once './classes/Telas.php';
require_once './classes/Servicos.class.php';
require_once './phpmailer/class.phpmailer.php';

//setcookie("paginas", "home");

$serv = new Servicos();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="mKzPyYRqHuuGvhHFlUSkRGEx56iJYGvftVhOkmdwguY" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="MAP TI é uma empresa individual apta a prestar serviços de TI, focalizado em desenvolvimento de projetos de sistemas e sites. Trabalhando com Cloud Computing, é passível de atendimento e suporte remoto. Nos casos de suporte aos computadores e notebooks, é possível trabalharmos remotamente, tal serviço tem sido um sucesso aos clientes.">
        <meta name="author" content="Michel Pereira">
        <meta name="keywords" content="map mapti michel pereira desenvolvimento sistema software site projetos web internet rede">
        <meta name="robots" content="map, mapti, michel pereira, desenvolvimento, sistema, software, site, projetos, web, internet, rede">
        <meta name="googlebot" content="map, mapti, michel pereira, desenvolvimento, sistema, software, site, projetos, web, internet, rede">
        <title>MAP TI - Desenvolvimento de Projetos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/screen_edit.css" rel="stylesheet">
        <link href="css/prettify.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/screen.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/iconMapti.ico">
        <link rel="icon" type="image/png" href="images/iconMapTI24x24.png">

    </head><!--/head-->

    <body>
        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>

        <!--<header id="home">-->
        <?php
        
            $tela = new Telas();
            $tela->telaTop();
//            $tela->telaSuperior();
        
        ?>

<!--        </header>/#home-->
        <?php
        
        $menu = filter_input(INPUT_GET, 'm');
//        $cookie = filter_input(INPUT_COOKIE, "paginas");
        $menuDescriptografado = rawurldecode($menu);
        switch($menuDescriptografado){
            
            default:
                $tela->telaInicial();
                break;
            
            case "vazio":
                $tela->telaInicial();
                break;
                    
            case "home":
                $tela->telaInicial();
                break;
                    
            case "hist":
                $tela->telaMapti();
                break;
                    
//            case "cli":
//                $tela->telaClientes();
//                break;
                    
            case "equ":
                $tela->equipe();
                break;
            
            case "cont":
                $tela->telaContato();
                break;
            
            case "serv":
                echo "<div id='servicos'";
                $serv->telaServicos();
                echo "</div>";
                break;
            
        }

        
        ?>



        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/mousescroll.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        

        <script>
            function ativaMensagem() {
                document.getElementById('sucesso').style.display = "none";
                document.getElementById('erro').style.display = "none";
                document.getElementById('mensagem').style.display = "block";
            }

        </script>
        <script>
            $('.bxslider').bxSlider({
              mode: 'fade',
              captions: true,
              auto: true,
              autoControls: true
            });            
            
        </script>
        <?php
        error_reporting(E_ALL);
        error_reporting(E_STRICT);
        $ip = getenv("REMOTE_ADDR");
        if ($_POST) {
            $send = new sendmessage();

            $nome = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $titulo = filter_input(INPUT_POST, 'titulo');
            $mensagem = filter_input(INPUT_POST, 'mensagem');

            $send->setNome($nome);
            $send->setEmail($email);
            $send->setTitulo($titulo);
            $send->setMensagem($mensagem);
            $send->enviaMensagem();
        }
        ?>                

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75005756-1', 'auto');
            ga('send', 'pageview');

        </script>

<!--        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75005756-1', 'auto');
            ga('send', 'pageview');

        </script>-->
        
        
        
        
        
        

    </body>
</html>