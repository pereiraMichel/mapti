<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of telas
 *
 * @author Debug
 */
class Telas {
    
    
    public function telaSuperior(){
        echo "<div class='navbar-header navbar-text-top' style='border-color: #000000; position: absolute;'>";
        echo "  <div class='container-fluid'>";
        echo "          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#menu' aria-expanded='false'>";
        echo "              <span class='sr-only'>Menu</span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "          </button>";
        echo "          <div class='navbar-subtext-top' style='padding-top: 5px; padding-left: 15px;'>";
        echo "                  <span>";
//        echo "                      <img src='images/logoMapTi100x50.png' width='40' height='41'>";
        echo "                  <a href='index.php' style='text-decoration: none; color: #3F6CA1; font-family: arial; font-size: 12px;' id='tituloRuv'><img src='images/logoMapTI.png' title='MAP TI' width='150' height='40' style='width: 16%; height: 8%'></a> ";
        echo "                  </span>";
//        echo "                  <img src='images/hanzipenImage.png' width='230' height='23' class='image-responsive' style='width: 20%; height: 20%; padding-bottom: 0px;'>";
        echo "          </div>";
        echo "  </div>";
        echo "</div>";
        echo "<div class='collapse navbar-collapse navbar-right' id='menu'>";
        echo "  <ul class='nav navbar-nav' style='padding-right: 25px;'>";
        echo "      <li>";
	echo "          <a href='sistema/' class='text-link'>";
        echo "              <button class='btn btn-warning btn-sm btn-responsive' style='border-radius: 4px; border: none; font-size: 14px;'>";
        echo "                  Entrar";
        echo "              </button>";
        echo "          </a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='formAdesao.php' role='button' style='text-decoration: none;' class='text-link'>";
        echo "              <button class='btn btn-primary btn-sm btn-responsive' style='border-radius: 4px; border: none; font-size: 14px;'>";
        echo "                  Cadastre-se";
        echo "              </button>";
        echo "          </a>";
        echo "      </li>";
        echo "  </ul>";
        echo "</div>";

    }
    
    public function telaClientes(){
//        echo "<div id='home-slider' class='carousel slide carousel-fade' data-ride='carousel' style='position: static;'>";
//        echo "  <div class='carousel-inner'>";
//        echo "      <div class='item active' style='background-image: url(images/WallpaperMapTI2.png);'>";
        echo "          <div class='col-sm-12'>";// style='padding-top: 550px;'
//        echo "          <div class='caption'>";//
        echo "              <h1 style='font-size: 30px;'>";// class='animated fadeInLeftBig'
        echo "                  Clie<span>ntes</span>";
        echo "              </h1>";
        echo "              <p style='text-align: center;'>";// class='animated fadeInRightBig'
        echo "                  <img src='images/clientes/RAContabil.png' title='RA Contábil' alt='RA Contábil' width='200' height='90'>&nbsp;";
        echo "                  <img src='images/clientes/logoPortoBellas4.png' title='Porto Bellas Piscinas e Jardins' alt='Porto Bellas Piscinas e Jardins' width='150' height='100'>&nbsp;";
        echo "                  <img src='images/clientes/logoRUV550x430.png' title='RedeUnaViva Jornada Real' alt='RedeUnaViva Jornada Real' width='140' height='100'>&nbsp;";
        echo "                  <img src='images/clientes/logoPaulaDesign.png' title='Paula Design Floral' alt='Paula Design Floral' width='220' height='100'>&nbsp;";
        echo "                  <img src='images/clientes/florzinha.jpg' title='Florzinha' alt='Florzinha' width='140' height='100'>&nbsp;<br><br>";
        echo "                  <img src='images/clientes/logomarcaDocumentos.png' title='Renata Neumann - Psicóloga' alt='Renata Neumann - Psicóloga' width='200' height='100'>&nbsp;";
        echo "                  <img src='images/clientes/LogoClinicaJabour.png' title='Centro Ambulatorial Jabour' alt='Centro Ambulatorial Jabour' width='150' height='80'>&nbsp;";
        echo "              </p>";
//        echo "          </div>";//fecha o caption
        echo "          </div>";//fecha o col-sm-12
//        echo "      </div>";//fecha o item active
//        echo "  </div>";//fecha o carrousel-inner
//        echo "</div><!--/#Clientes-->";//fecha o home-slider
        echo "<p style='heigth: 20px;'>&nbsp;</p>";
        
        //Terceira Coluna
        echo "<div class='col-sm-12'>";
        echo "  <p style='text-align: center;'>";
        echo "      <a class='btn btn-default' href='index.php'>Voltar</a>";
        echo "  </p>";
        echo "</div>";
        
    }
    
    public function telaInicial(){
        echo "<div id='home-slider' class='carousel slide carousel-fade' data-ride='carousel' style='position: static;'>";
        echo "  <div class='carousel-inner'>";
        echo "      <div class='item active' style='background-image: url(images/slider/smanager.jpg);'>";
        echo "          <div class='caption'>";
        echo "              <h1 class='animated fadeInLeftBig' style='font-size: 30px;'>";
        echo "                  Desenvolvimento de <span>Projetos</span>";
        echo "              </h1>";
        echo "              <p class='animated fadeInRightBig'>";
        echo "                  Projetos de sistemas, sites e cloud computing. Todos de forma responsiva para dispositivos mobile.";
        echo "              </p>";
        echo "              <a data-scroll class='btn btn-start animated fadeInUpBig' href='index.php?m=serv'>";
        echo "                  Conheça os serviços";
        echo "              </a>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='item' style='background-image: url(images/slider/notebook.jpg);'>";
        echo "          <div class='caption'>";
        echo "              <h1 class='animated fadeInLeftBig' style='font-size: 30px;'>";
        echo "                  Suporte <span>Remoto</span>";
        echo "              </h1>";
        echo "              <p class='animated fadeInRightBig'>";
        echo "                  Atendimento remoto a computadores e notebooks, Redes local e wi-fi";
        echo "              </p>";
        echo "              <a data-scroll class='btn btn-start animated fadeInUpBig' href='#services'>";
        echo "                  Saiba mais";
        echo "              </a>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='item' style='background-image: url(images/slider/googleApps.png);'>";
        echo "          <div class='caption'>";
        echo "              <h1 class='animated fadeInLeftBig' style='font-size: 30px;'>";
        echo "                  Google <span>Apps for Work</span>";
        echo "              </h1>";
        echo "              <p class='animated fadeInRightBig'>";
        echo "                  Tenha o poder dos aplicativos do Google e experimente de graça por 30 dias.";
        echo "              </p>";
        echo "              <a data-scroll class='btn btn-start animated fadeInUpBig' href='#services'>";
        echo "                  Saiba mais";
        echo "              </a>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";//fecha a div carrousel-inner
        echo "      <a class='left-control' href='#home-slider' data-slide='prev'><i class='fa fa-angle-left'></i></a>";
        echo "      <a class='right-control' href='#home-slider' data-slide='next'><i class='fa fa-angle-right'></i></a>";
//        echo "      <a id='tohash' href='#services'><i class='fa fa-angle-down'></i></a>";
        echo "</div><!--/#home-slider-->";
    }
    
    public function telaTop(){
//        echo $historia;
        echo "<header id='home'>";
        echo "<nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>";// style='background-color: rgba(0,0,0,.7);'
        echo "  <div class='container'>";
        echo "      <div class='navbar-header page-scroll'>";
        echo "          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-main-collapse'>";
        echo "              <i class='fa fa-bars'></i>";
        echo "          </button>";
        echo "          <a class='navbar-brand' href='http://localhost:8080/mapti/'>";
//        echo "          <a class='navbar-brand' href='index.php'>";
        echo "              <img src='images/logoMapTI.png' title='MAP TI' width='225' height='130'>";
        echo "          </a>";
        echo "      </div>";
        echo "      <div class='collapse navbar-collapse navbar-right navbar-main-collapse' style='background-color: rgba(0,0,0,.3);'>";//border: #fff 1px solid; 
        echo "          <ul class='nav navbar-nav'>";
        echo "              <li>";
        echo "                  <a href='http://localhost:8080/mapti/'>Home</a>";
//        echo "                  <a href='index.php'>Home</a>";
        echo "              </li>";
        echo "              <li class='dropdown'>";
        echo "                  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Sobre MAPTI <b class='caret'></b></a>";
        echo "                  <ul class='dropdown-menu' role='menu'>";
        echo "                      <li style='padding-left: 5px;'>";
        echo "                          <a href='index.php?m=hist'>a História</a>";
//        echo "                          <a href='index.php?m=cli'>Clientes</a>";
        echo "                          <a href='index.php?m=equ'>Equipe</a>";
        echo "                          <a href='index.php?m=cur'>Cursos</a>";
        echo "                          <a href='index.php?m=cli'>Clientes</a>";
        echo "                      </li>";
        echo "                  </ul>";
        echo "              </li>";
        echo "              <li class='dropdown'>";
        echo "                  <a href='index.php?m=serv'>Serviços</a>";// <b class='caret'></b></a>  class='dropdown-toggle' data-toggle='dropdown'";
        echo "              </li>";
        echo "              <li class='dropdown'>";
        echo "                  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Sistemas <b class='caret'></b></a>";
        echo "                  <ul class='dropdown-menu' role='menu'>";
        echo "                      <li style='padding-left: 5px;'>";
        echo "                          <a href='CloudSupport/acesso.php'>Cloud Support</a>";
        echo "                          <a href='contrato'>Cloud Contratos</a>";
        echo "                      </li>";
        echo "                  </ul>";
        echo "              </li>";
        echo "              <li>";
        echo "                  <a href='index.php?m=cont'>Contato</a>";
        echo "              </li>";
        echo "          </ul>";
        echo "      </div>";
        echo "  </div>";
        echo "</nav>";
        echo "</header>";
    }
    
    public function telaMapti(){
        echo "<div id='home-slider' class='carousel slide carousel-fade' data-ride='carousel' style='position: static;'>";
        echo "  <div class='carousel-inner'>";
        echo "      <div class='item active' style='background-image: url(images/WallpaperMapTI2.png);'>";
        echo "          <div class='col-sm-2'>";
        echo "              &nbsp;";
        echo "          </div>";
        echo "          <div class='col-sm-8' style='padding-top: 550px;'>";
        echo "              <div class='caption'>";
        echo "                  <h1 class='animated fadeInLeftBig' style='font-size: 30px;'>";
        echo "                      A HIST<span>ÓRIA</span>";
        echo "                  </h1>";
        echo "                  <p class='animated fadeInRightBig'>";
        echo "                      <p style='text-transform: none; font-size: 18px;'>";
        echo "                          MAP TI é uma empresa individual criada por mim, <b>Michel Pereira</b>, para prestar serviços de Tecnologia da Informação, ou informática para o termo popular. Dispondo dos meus conhecimentos com foco em desenvolvimento de softwares, sites e banco de dados cuja experiência me mantém em constante atualização desde o ano de 1995. Pois antes de criar o MAP TI, trabalhava como freelance.";
        echo "                      </p>";
        echo "                      <p style='text-transform: none; font-size: 18px;'>";
        echo "                          Iniciei os conhecimentos de desenvolvimento em 1984, na linguagem BASIC, no velho TK85, após a leitura intensa do uso da linguagem. Embora tenha trabalhado no ramo de contabilidade de 1996 até 2006, executava serviços paralelos em TI. A minha primeira linguagem de programação usada profissionalmente é o Delphi (vulgo Pascal). Com o incentivo de várias pessoas, inclusive colegas de trabalho, decidi aprimorar os meus conhecimentos em TI, no qual até hoje tenho satisfação bem grande dos meus antigos e novos clientes.";
        echo "                      </p>";
        echo "                  </p>";
        echo "              </div>";//caption
        echo "          </div>";//div sm-12
        echo "          <div class='col-sm-2'>";
        echo "              &nbsp;";
        echo "          </div>";
        echo "      </div>";//item active
        echo "  </div>";//carrousel
        echo "</div><!--/#Sobre MAP TI-->";
        echo "<p style='heigth: 20px;'>&nbsp;</p>";
        
        //Terceira Coluna
        echo "<div class='col-sm-12'>";
        echo "  <p style='text-align: center;'>";
        echo "      <a class='btn btn-default' href='index.php'>Voltar</a>";
        echo "  </p>";
        echo "</div>";
        
    }
    
    public function equipe(){
//        echo "<section id='team'>";
        echo "<section class='class='carousel slide carousel-fade' style='background-image: url(images/slider/dark-blue.jpg); width: 100%; height: 100%;'>";
        echo "  <div class='container' style='padding-top: 70px;'>";// width: 100%;
        echo "      <div class='row'>";
        echo "          <div class='col-sm-12 wow fadeInUp' data-wow-duration='1200ms' data-wow-delay='300ms' style='color: rgba(255,255,255,.8)'>";
        echo "              <h2 style='color: rgba(255,255,255,.8)'>A Equipe</h2>";
        echo "              <p>";
        echo "                  O MAP TI, como é uma empresa individual, os serviços são desenvolvidos por mim no meu home office.";
        echo "              </p>";
        echo "          </div>";
        echo "              <div class='col-sm-3'>";
        echo "                  <div data-wow-duration='1000ms' data-wow-delay='300ms'>";// class='team-member'
        echo "                      <div class='member-image'>";
        echo "                          <img class='img-rounded img-responsive' src='images/team/michelPereira.jpg' title='Michel Pereira' width='200' height='300'>";
        echo "                      </div>";
        echo "                  </div>";
        echo "              </div>";
        echo "              <div class='col-sm-9'>";
        echo "              <div data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                      <div class='member-info'>";
        echo "                          <h3 style='color: rgba(255,255,255,.7)'>Michel Pereira</h3>";
        echo "                          <h4>CEO &amp; Fundador</h4>";
        echo "                          <p style='font-weight: bold; color: rgba(255,255,255,.7);'>";
        echo "                              - Líder de Projetos<br>- Analista de Sistemas e Web<br>- Desenvolvedor de Sistemas, Sites e Banco de Dados";
        echo "                          </p>";
        echo "                      </div>";
        echo "                      <div class='social-icons' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                          <ul>";
        echo "                              <li>";
        echo "                                  <a class='facebook' href='https://www.facebook.com/pereira.michel1' target='_blank'>";
        echo "                                      <i class='fa fa-facebook'></i>";
        echo "                                  </a>";
        echo "                              </li>";
        echo "                              <li>";
        echo "                                  <a class='twitter' href='https://www.twitter.com/pereiramichel' target='_blank'>";
        echo "                                      <i class='fa fa-twitter'></i>";
        echo "                                  </a>";
        echo "                              </li>";
        echo "                              <li>";
        echo "                                  <a class='linkedin' href='https://br.linkedin.com/in/pereiramichel' target='_blank'>";
        echo "                                      <i class='fa fa-linkedin'></i>";
        echo "                                  </a>";
        echo "                              </li>";
        echo "                              <li>";
        echo "                                  <a class='dribbble' href='https://dribbble.com/pereiramichel' target='_blank'>";
        echo "                                      <i class='fa fa-dribbble'></i>";
        echo "                                  </a>";
        echo "                              </li>";
        echo "                              <li>";
        echo "                                  <a class='envelope' href='mailto:pereira.michel@gmail.com' title='pereira.michel@gmail.com' target='_blank'>";
        echo "                                      <i class='fa fa-envelope' title='pereira.michel@gmail.com'></i>";
        echo "                                  </a>";
        echo "                              </li>";
        echo "                          </ul>";
        echo "                      </div>";//fecha a div social-icons
        echo "              </div>";//fecha a div data-wow
        echo "          </div>";//fecha a div col-sm-9
        echo "      </div>";//fecha a div row
        echo "  </div>";//fecha a div container
        
        
        echo "</section><!--/#team-->";
        
    }
    
    public function telaContato(){
//        echo "<section id='contact'>";
        echo "  <div id='contact-us' class='parallax'>";
        echo "      <div class='container'>";
        echo "          <div class='row'>";
        echo "              <div class='heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                  <h2>Contato</h2>";
        echo "                  <p>";
        echo "                      Entre em contato para qualquer informação, solicitação, orçamento, elogios, sugestões etc. Seu contato e sempre bem-vindo. Favor preencher todos os campos.";
        echo "                  </p>";
        echo "              </div>";
        echo "          </div>";
        echo "          <div class='contact-form wow fadeIn' data-wow-duration='1000ms' data-wow-delay='600ms'>";
        echo "              <div class='row'>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div style='display: none;' id='mensagem'>";
        echo "                          <p><i class='fa fa-spinner fa-spin'></i> Enviando...</p>";
        echo "                      </div>";
        echo "                      <div style='display: none;' id='sucesso'>";
        echo "                          <p class='text-success' id='mensagemSucesso'><b>Obrigado pelo seu contato. Brevemente, entraremos em contato.</b></p>";
        echo "                      </div>";
        echo "                      <div style='display: none;' id='erro'>";
        echo "                          <p class='text-alert' id='mensagemErro'>Ocorreu um erro. Tente novamente mais tarde ou envie para o e-mail michel@mapti.com.br, do seu navegador.</p>";
        echo "                      </div>";
        echo "                      <form id='contact-form' name='contact-form' method='post' action='#contact'>";
        echo "                          <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                              <div class='col-sm-6'>";
        echo "                                  <div class='form-group'>";
        echo "                                      <input type='text' name='name' class='form-control' placeholder='Nome' required='required'>";
        echo "                                  </div>";
        echo "                              </div>";
        echo "                              <div class='col-sm-6'>";
        echo "                                  <div class='form-group'>";
        echo "                                      <input type='email' name='email' class='form-control' placeholder='Endereço de E-mail' required='required'>";
        echo "                                  </div>";
        echo "                              </div>";
        echo "                          </div>";
        echo "                          <div class='form-group'>";
        echo "                              <input type='text' name='titulo' class='form-control' placeholder='Assunto' required='required'>";
        echo "                          </div>";
        echo "                          <div class='form-group'>";
        echo "                              <textarea name='mensagem' id='mensagem' class='form-control' rows='4' placeholder='Digite sua mensagem' required='required'></textarea>";
        echo "                          </div>";
        echo "                          <div class='form-group'>";
        echo "                              <button type='submit' class='btn-submit' onclick='javascript: ativaMensagem()'>Enviar</button>";
        echo "                          </div>";
        echo "                      </form>";
        echo "                  </div>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='contact-info wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                          <p>";
        echo "                              Preencha todos os campos. Fique à vontade para qualquer forma de comunicação.";
        echo "                          </p>";
        echo "                          <ul class='address'>";
        echo "                              <li><i class='fa fa-map-marker'></i> <span> Endereço:</span> Rua dos Tintureiros, 213 </li>";
        echo "                              <li><i class='fa fa-phone'></i> <span> Telefone:</span> +55 21 3591-1534  </li>";
        echo "                              <li><i class='fa fa-whatsapp'></i> <span> Whatsapp:</span> +55 21 98243-1674  </li>";
        echo "                              <li><i class='fa fa-envelope'></i> <span> Email:</span><a href='mailto:michel@mapti.com.br'> michel@mapti.com.br</a></li>";
        echo "                              <li><i class='fa fa-globe'></i> <span> Website:</span> <a href='#'>www.mapti.com.br</a></li>";
        echo "                          </ul>";
        echo "                      </div>";
        echo "                  </div>";
        echo "              </div>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
//        echo "</section><!--/#contact-->";
        
    }
    
    public function telaBaixo(){
        echo "<footer id='footer'>";
        echo "  <div class='footer-bottom'>";
        echo "      <div class='container'>";
        echo "          <div class='row'>";
        echo "              <div class='col-sm-12'>";
        echo "                  <div class='text-center'>";
        echo "                      <p>&copy; 2016 MAP TI</p>";
        echo "                  </div>";
        echo "              </div>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
        echo "</footer>";
        
    }
    
}
