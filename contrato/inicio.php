<!DOCTYPE html>
<?php

require_once './classes/telas.class.php';
require_once './classes/texto.class.php';
require_once './classes/xml.class.php';

error_reporting(0);

$tela = new telas();
$texto = new texto();

session_start();

if(!$_SESSION['autorizado']){
    header("Location: index.php");
}


?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Michel - MAP TI">
    <link rel="shortcut icon" href="../images/iconMapti.ico">
    <link rel="icon" type="image/png" href="../images/iconMapTI24x24.png">

    <title>Cloud Contratos - MAP TI</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php">
              Cloud Contratos - Pele Lisa
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="inicio.php">Menu Inicial</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="index.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-3 col-md-2 sidebar">
                  <ul class="nav nav-sidebar">
                      <li class="active"><a href="#">MENU <span class="sr-only">(current)</span></a></li>
                  </ul>
                  <?php
                    $menu = filter_input(INPUT_GET, 'm');
                    
                    switch($menu){
                        default:
                            $tela->menuEsquerdoPrincipal();
                            break;
                        case "":
                            $tela->menuEsquerdoPrincipal();
                            break;
                        case "cs":
                            $tela->menuEsquerdoContrato();
                            break;
                        
                    }
                  
                  ?>
<!--                  <p style="height: 100px;">&nbsp;</p>
                  <p>Usuario: Michel</p>-->
              </div>
              <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                  <?php
                    
                    switch($menu){
                        default:
                            $tela->telaInicial();
                            break;
                        case "":
                            $tela->telaInicial();
                            break;
                        case "cs":
//                            $texto->contratanteContratada();
                            
                            $serv = filter_input(INPUT_GET, 's');
                            
                            switch($serv){
                                
                                default:
                                    $tela->telaInicialContrato();
                                    break;
                                case "01":
                                    $texto->contratanteContratada();
                                    break;
                                case "02":
                                    $texto->testemunhas();
                                    break;
                                case "03":
                                    $texto->contratoPJNew();
                                    break;
                                
                            }
                            
                            break;
                    }
                  
                  ?>

              </div>
          </div>
      </div>
      <!--</div>-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Dashboard Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Dashboard Template for Bootstrap_files/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>