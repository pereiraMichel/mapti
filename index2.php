<?php

//use Telas;

require_once './classes/sendmessage.php';
require_once './classes/Telas.php';
require_once './phpmailer/class.phpmailer.php';


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


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/iconMapti.ico">
        <link rel="icon" type="image/png" href="images/iconMapTI24x24.png">

    </head><!--/head-->

    <body>
<!--		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- www.mapti.com.br -->
<!--		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-9006088213361327"
			 data-ad-slot="8123106695"
			 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script> -->
        <!--.preloader-->
        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
        <!--/.preloader-->

        <header id="home">
        <?php
        
            $tela = new Telas();
//            $tela->telaTop();
//            $tela->telaSuperior();
        
        ?>
            <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel" style="position: static;">
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(images/slider/smanager.jpg);">
                        <div class="caption">
                            <p class="animated fadeInLeftBig">
                                <img src="images/logoMapTI.png" title="MAP TI" width="330" height="200">
                            </p>
                          <!--<h1 class="animated fadeInLeftBig">Welcome to <span>Oxygen</span></h1>-->
                            <p class="animated fadeInRightBig">
                                <span style="">Desenvolvimento de Projetos de Softwares</span>
                            </p>
                          <!--<p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>-->
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(images/slider/cloud.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig" style="font-size: 30px;">
                                Desenvolvimento de <span>Projetos</span>
                            </h1>
                            <p class="animated fadeInRightBig">
                                Projetos de Sistemas, Sites e Cloud Computing. Todos de forma responsiva para dispositivos mobile.
                            </p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(images/slider/notebook.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig" style="font-size: 30px;">
                                Suporte <span>Remoto</span>
                            </h1>
                            <p class="animated fadeInRightBig">
                                Atendimento remoto a computadores e notebooks, Redes local e wi-fi
                            </p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(images/slider/fundoRestrito.jpg)">
                        <div class="caption">
                            <h1 class="animated fadeInLeftBig" style="font-size: 30px;">
                                Acesso <span>Restrito</span>
                            </h1>
                            <p class="animated fadeInRightBig">
                                Acesso exclusivo para clientes e futuros clientes.
                            </p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" href="CloudSupport/acesso.php">
                                Acesse aqui
                            </a>
                        </div>
                    </div>
                </div>
                <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

            </div><!--/#home-slider-->
            <div class="main-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                          <!--<h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>-->
                            <h1>
                                <img class="img-responsive" src="images/logoMapTi200x100.png" alt="logo" width="148" height="100">
                            </h1>
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll active"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#services">Serviços</a></li> 
                            <li class="scroll"><a href="#about-us">Sobre MAP TI</a></li>                     
                            <li class="scroll"><a href="#team">Equipe</a></li>
                            <!--            <li class="scroll"><a href="#blog">Blog</a></li>-->
                            <li class="scroll"><a href="#contact">Contato</a></li>       
                            <li class="scroll"><a href="CloudSupport/acesso.php">Acesso</a></li>
                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header><!--/#home-->
        <section id="services">
            <div class="container">
                <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h2>Serviços</h2>
                            <p>
                                Todos os serviços são projetados cautelosamente com transparência, segurança e eficiência. A qualidade e o preço correspondem para todos os serviços, pois queremos a mesma coisa: <b>satisfazer os nossos clientes</b>.
                            </p>
                        </div>
                    </div> 
                </div>
                <div class="text-center our-services">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="service-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="service-info">
                                <h3>Web Marketing</h3>
                                <p>
                                    Divulgar os seus serviços on-line tornou-se uma ferramenta bastante útil, devido a alta procura dos produtos e/ou serviços pelos buscadores. Divulgar promoções, produtos e/ou serviços novos, manter o feedback interage com o cliente, se sentindo mais à vontade e confiante.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                            <div class="service-icon">
                                <i class="fa fa-tablet"></i>
                            </div>
                            <div class="service-info">
                                <h3>Redes Sociais</h3>
                                <p>Inúmeras pessoas acessam a rede social, que hoje é uma ferramenta muito útil para a divulgação dos seus produtos e/ou serviços. A cada curtida, outras pessoas são informados em questão de segundos que, por sua vez, conhece cada vez mais os seus produtos e/ou serviços.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                            <div class="service-icon">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <div class="service-info">
                                <h3>Cloud Computing</h3>
                                <p>Um recurso bem útil para armazenamento de seus arquivos e sistemas. Através do recurso de segurança <b>SaaS</b>, fica bem mais fácil e confiante manter a estrutura de um sistema e banco de dados, além de manter qualquer tipo de arquivos e programas executáveis.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
                            <div class="service-icon">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <div class="service-info">
                                <h3>Sites</h3>
                                <p>
                                    Página para web, com design responsivos para melhor visualização nos dispositivos tablet e celulares, garantindo a transparência e a qualidade. Um site representa uma forma de os clientes conhecerem melhor os produtos e/ou serviços, assim como a possibilidade de efetuar uma compra através do site.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
                            <div class="service-icon">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="service-info">
                                <h3>Sistemas Web e Desktop</h3>
                                <p>
                                    Um sistema pode ser web (externo ou internet) ou desktop (interno, necessitando de instalação), porém, monitorados frequentemente e elaborado cada processo de evolução do software, de forma mais fácil a atender os clientes. Atualmente, não trabalhamos no intuito de apenas cadastrar, alterar, consultar ou excluir, e sim, de forma a oferecer solução ao cliente.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
                            <div class="service-icon">
                                <i class="fa fa-support"></i>
                            </div>
                            <div class="service-info">
                                <h3>Suporte Remoto</h3>
                                <p>
                                    Consiste na manutenção de computadores e notebooks, incluindo configurações. Com o auxílio da internet, há possibilidade de fazer manutenção remota em qualquer lugar que estiver. Muitas vezes, tem que ser presencial e somente na ausência da internet, posso realizar. Esse recurso é um sucesso para todos os meus clientes. Lembrando que esse recurso só é possível na manutenção preventiva.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#services-->
        <section id="about-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Sobre MAP TI</h2>
                            <p>
                                MAP TI é uma empresa individual criada por mim, <b>Michel Pereira</b>, para prestar serviços de Tecnologia da Informação, ou informática para o entendimento popular. Dispondo dos meus conhecimentos com foco em desenvolvimento de softwares, sites e banco de dados cuja experiência me mantém em constante atualização desde o ano de 2000. Antes de criar o MAP TI, trabalhava como freelance.
                            </p>
                            <p>
                                Na verdade, iniciei os conhecimentos de desenvolvimento em 1985, na linguagem BASIC, no velho TK85, após a leitura intensa do uso da linguagem. Embora tenha trabalhado no ramo de contabilidade até 2000, executava serviços paralelos em TI. A minha primeira linguagem de programação usada profissionalmente é o Delphi (vulgo Pascal). Com o incentivo de várias pessoas, inclusive colegas de trabalho, decidi aprimorar os meus conhecimentos em TI, no qual até hoje tenho satisfação bem grande dos meus antigos e novos clientes.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p class="lead">Gestão de Projetos</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                                <p class="lead">Sites</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="90">90%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <p class="lead">Programação/ Desenvolvimento de Projetos</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <p class="lead">Banco de dados</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
                                </div>
                            </div>
                            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <p class="lead">Suporte Remoto</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#Sobre MAP TI-->

        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                        <h2>A Equipe</h2>
                        <p>
                            O MAP TI, como é uma empresa individual, os serviços são desenvolvidos por mim no meu home office.
                        </p>
                    </div>
                </div>
                <div class="team-members">
                    <div class="row">
                        <div class="col-sm-3">
                            &nbsp;
                        </div>
                        <div class="col-sm-6">
                            <div class="team-member" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <!--<div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">-->
                                <div class="member-image">
                                    <img class="img-responsive" src="images/team/michelPereira.jpg" alt="">
                                </div>
                                <div class="member-info">
                                    <h3>Michel Pereira</h3>
                                    <h4>CEO &amp; Fundador</h4>
                                    <p>
                                        Analista de Sistemas, Desenvolvedor e Analista BD
                                    </p>
                                </div>
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a class="facebook" href="https://www.facebook.com/pereira.michel1" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="https://www.twitter.com/pereiramichel" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="linkedin" href="https://br.linkedin.com/in/pereiramichel" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dribbble" href="https://dribbble.com/pereiramichel" target="_blank">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="envelope" href="mailto:pereira.michel@gmail.com" title="pereira.michel@gmail.com" target="_blank">
                                                <i class="fa fa-envelope" title="pereira.michel@gmail.com"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            &nbsp;
                        </div>            
                    </div>
                </div>            
            </div>
        </section><!--/#team-->

        <section id="contact">
            <!--    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>-->
            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Contato</h2>
                            <p>
                                Entre em contato para qualquer informação, solicitação, orçamento, elogios, sugestões etc. Seu contato e sempre bem-vindo. Favor preencher todos os campos.
                            </p>
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6">
                                <div style="display: none;" id="mensagem">
                                    <p><i class='fa fa-spinner fa-spin'></i> Enviando...</p>
                                </div>
                                <div style="display: none;" id="sucesso">
                                    <p class="text-success" id="mensagemSucesso"><b>Obrigado pelo seu contato. Brevemente, entraremos em contato.</b></p>
                                </div>
                                <div style="display: none;" id="erro">
                                    <p class="text-alert" id="mensagemErro">Ocorreu um erro. Tente novamente mais tarde ou envie para o e-mail michel@mapti.com.br, do seu navegador.</p>
                                </div>

                                <form id="contact-form" name="contact-form" method="post" action="#contact">
                                    <!--                <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">-->
                                    <div class="row wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Nome" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Endereço de E-mail" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="titulo" class="form-control" placeholder="Assunto" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="mensagem" id="mensagem" class="form-control" rows="4" placeholder="Digite sua mensagem" required="required"></textarea>
                                    </div>                        
                                    <div class="form-group">
                                        <button type="submit" class="btn-submit" onclick="javascript: ativaMensagem()">Enviar</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-sm-6">
                                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <p>
                                        Preencha todos os campos. Fique à vontade para qualquer forma de comunicação.
                                    </p>
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker"></i> <span> Endereço:</span> Rua dos Tintureiros, 213 </li>
                                        <li><i class="fa fa-phone"></i> <span> Telefone:</span> +55 21 3591-1534  </li>
                                        <li><i class="fa fa-whatsapp"></i> <span> Whatsapp:</span> +55 21 98243-1674  </li>
                                        <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:michel@mapti.com.br"> michel@mapti.com.br</a></li>
                                        <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.mapti.com.br</a></li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section><!--/#contact-->
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p>&copy; 2016 MAP TI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/mousescroll.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <script>
            function ativaMensagem() {
                document.getElementById('sucesso').style.display = "none";
                document.getElementById('erro').style.display = "none";
                document.getElementById('mensagem').style.display = "block";
            }

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