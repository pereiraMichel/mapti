<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of servicos
 *
 * @author Debug
 */
class Servicos {
    
    
    public function servMarketingDigital(){
        
        //Primeira Coluna
//        echo "<div class='col-sm-1'>";
//        echo "  &nbsp;";
//        echo "</div>";
        echo"<div id='fundoServicos'>";
        echo "<div class='col-sm-9' style='opacity: 1'>";// style='background-color: #fff; opacity: .5; filter: alpha(opacity=50);'>";
        echo "  <h2 id='corBrancoAlpha' style='text-align: justify;'><i class='fa fa-briefcase'></i> Marketing Digital</h2>";
        echo "  <p style='text-align: justify; text-transform: none;'>";
        echo "      Como está a divulgação do seu site ou e-commerce? Essa é uma pergunta que, por algumas vezes, deixamos passar por despercebido, até notar a queda de consumo de seus produtos ou serviços. A internet é um fator fundamental para as pessoas conhecerem a sua marca. O que você faz ou vende é uma das perguntas que o cliente faz e, por isso, as palavras descritas fazem parte de cada detalhe que o leva para o cliente final. Quantas vezes o cliente visita o seu site? O atendimento está sendo satisfatório? Dessa forma, devemos conhecer o cliente, saber o que ele precisa. Na internet, temos duas ferramentas: SEO e SEM que, respectivamente, é um sistema de busca avançada e um sistema de busca pago. Qual vale a pena? Por isso, dispondo dos serviços do MAP TI, para ajudar a dar um passo à frente dos concorrentes e ver o que o cliente precisa, assim como as ferramentas para o controle, de forma que o cliente fique seguro de sua compra e monitoramento de sua entrega.";
        echo "  </p>";
        echo "</div>";
        
        //Segunda Coluna
        echo "<div class='col-sm-2'>";
        echo "  <p>";
        echo "      <img src='images/selos/marketing.png' alt='Selo Marketing Digital' title='Selo Marketing Digital' width='150' height='150'>";
        echo "  </p>";
        echo "</div>";
        
        //Terceira Coluna
        echo "<div class='col-sm-12'>";
        echo "  <p>";
        echo "      <a class='btn btn-default' href='index.php?m=serv'>Voltar</a>";
        echo "  </p>";
        echo "</div>";
        echo "</div>";
    }
    public function servSitesEcommerce(){
        //Primeira Coluna
        echo "<div class='col-sm-1'>";
        echo "  &nbsp;";
        echo "</div>";
        echo "<div class='col-sm-9'>";// style='background-color: #fff; opacity: .5; filter: alpha(opacity=50);'>";
        echo "  <h2 id='corBrancoAlpha' style='text-align: justify;'><i class='fa fa-briefcase'></i> E-Commerce</h2>";
        echo "  <p style='text-align: justify; text-transform: none;'>";
        echo "      Uma das preocupações vinculadas ao site que comercializa os seus produtos ou serviços, é o objetivo de o site ter usuários diretos. Assim como o marketing digital, temos possibilidades de ter os sistemas de busca SEO e SEM. Outra principal preocupação é a segurança, da forma que o usuário tenha o retorno, como o produto sendo entregue no tempo estipulado e o recibo da compra. É muito comum, pelo menos, ter o básico de marketing digital, para que a análise tenha o retorno satisfatório.";
        echo "  </p>";
        echo "</div>";
        
        //Segunda Coluna
        echo "<div class='col-sm-2'>";
        echo "  <p>";
        echo "      <img src='images/selos/ecommerce.jpg' alt='Selo E-Commerce' title='Selo E-Commerce' width='150' height='150'>";
        echo "  </p>";
        echo "</div>";
        
        //Terceira Coluna
        echo "<div class='col-sm-12'>";
        echo "  <p>";
        echo "      <a class='btn btn-default' href='index.php?m=serv'>Voltar</a>";
        echo "  </p>";
        echo "</div>";
    }
    public function servGestaoProjetos(){
        //Primeira Coluna
        echo "<div class='col-sm-1'>";
        echo "  &nbsp;";
        echo "</div>";
        echo "<div class='col-sm-9'>";
        echo "  <h2 id='corBrancoAlpha' style='text-align: justify;'><i class='fa fa-briefcase'></i> Gestão de Projetos</h2>";
        echo "  <p style='text-align: justify; text-transform: none;'>";
        echo "      Gerenciar, analisar erros e riscos, documentar e melhorar a estrutura do processo de desenvolvimento do projeto de sistemas e de sites é uma etapa primordial e fundamental. Muitos projetos de sistemas e sites não estão correspondidos ou elaborados da forma que o cliente necessita. Uma comunicação verbal e escrita é um convite ao sucesso do desenvolvimento do projeto, inclusive no seu tempo hábil e eficaz.";
        echo "  </p>";
        echo "</div>";
        
        //Segunda Coluna
        echo "<div class='col-sm-2'>";
        echo "  <p>";
        echo "      <img src='images/tec.jpg' alt='Gestão de Projetos' title='Gestão de Projetos' width='150' height='150'>";
        echo "  </p>";
        echo "</div>";
        
        //Terceira Coluna
        echo "<div class='col-sm-12'>";
        echo "  <p>";
        echo "      <a class='btn btn-default' href='index.php?m=serv'>Voltar</a>";
        echo "  </p>";
        echo "</div>";
        
    }
    public function servAnaliseWeb(){
        
    }
    public function servSistemas(){
        
    }
    public function servSuporte(){
        
    }
    
    public function telaInicialServicos(){

        echo "                      <div class='col-sm-4'>";
        echo "                          <a href='index.php?m=serv&s=mark'>";
        echo "                              <div class='service-icon'>";
        echo "                                  <i class='fa fa-briefcase' style='padding-left: 33%;'></i>";
        echo "                              </div>";
        echo "                          </a>";
        echo "                          <div class='service-info' style='text-transform: none;'>";
        echo "                              <a href='index.php?m=serv&s=mark'><h3 id='corBrancoAlpha'>Marketing Digital</h3></a>";
        echo "                              <p style='text-align: justify; text-transform: none;'>";
        echo "                                  A internet é uma ferramenta bastante útil para a divulgação dos seus serviços e/ou produtos pelos buscadores. Redes sociais e Sistemas de busca (SEO e SEM) são um dos principais fatores de sucesso para o seu e-commerce e outros sites, desde que alcance o usuário para o seu produto final.";
        echo "                                  <a data-scroll class='' href='index.php?m=serv&s=mar' id='corBrancoAlpha' title='Saiba mais' alt='Saiba mais'>";
        echo "                                      <i class='fa fa-eye'></i>";
        echo "                                  </a>";
        echo "                              </p>";
        echo "                          </div>";
        echo "                      </div>"; //fecha o col-sm-4

        echo "                      <div class='col-sm-4'>";
        echo "                          <div class='service-icon'>";
        echo "                              <i class='fa fa-tablet' style='padding-left: 38%;'></i>";
        echo "                          </div>";
        echo "                          <div class='service-info'>";
        echo "                              <h3 id='corBrancoAlpha'>SITES E E-COMMERCE</h3>";
        echo "                              <p style='text-transform: none;'>";
        echo "                                  Página para web, com design responsivos para melhor visualização nos dispositivos tablet e celulares, garantindo a transparência e a qualidade. Um site e um e-commerce representam uma forma de os clientes conhecerem melhor os produtos e/ou serviços, dentro do mercado virtual.";

        echo "                                  <a data-scroll class='' href='index.php?m=serv&s=sit' id='corBrancoAlpha' title='Saiba mais' alt='Saiba mais'>";
        echo "                                      <i class='fa fa-eye'></i>";
        echo "                                  </a>";
        echo "                              </p>";
        echo "                          </div>";
        echo "                      </div>";//fecha col-sm-4

        echo "                      <div class='col-sm-4'>";
        echo "                          <div class='service-icon'>";
        echo "                              <i class='fa fa-sitemap'></i>";
        echo "                          </div>";
        echo "                          <div class='service-info'>";
        echo "                              <h3 id='corBrancoAlpha'>Gestão de Projetos</h3>";
        echo "                              <p style='text-transform: none;'>";
        echo "                                  Como está o gerenciamento dos projetos de sistemas? Cada etapa do desenvolvimento estão corretamente analisados? Há pós e contras? Elas foram documentadas? As tecnologias nele aplicadas, corresponde à satisfação do cliente? Como está os fatores de risco?&nbsp;";
        echo "                                  <a data-scroll class='' href='index.php?m=serv&s=pro' id='corBrancoAlpha' title='Saiba mais' alt='Saiba mais'>";
        echo "                                      <i class='fa fa-eye'></i>";
        echo "                                  </a>";
        echo "                              </p>";
        echo "                          </div>";
        echo "                      </div>";

        echo "                      <div class='col-sm-4'>";
        echo "                          <div class='service-icon'>";
        echo "                              <i class='fa fa-bar-chart'></i>";
        echo "                          </div>";
        echo "                          <div class='service-info'>";
        echo "                              <h3 id='corBrancoAlpha'>ANÁLISE WEB</h3>";
        echo "                              <p style='text-transform: none;'>";
        echo "                          Como está o andamento do seu site ou e-commerce? Há visitantes diretos? O site está carregando em tempo hábil? Qual a melhor forma de busca? O seu site está sendo corretamente divulgado nos sites de busca, através do SEO ou SEM? O site está responsivo? Com que frequência ou quais dispositivos o seu site anda sendo visitado? Os relatórios para estas perguntas são analisados, monitorados e busca a melhor forma de retorno.&nbsp;";
        echo "                                  <a data-scroll class='' href='index.php?m=serv&s=ana' id='corBrancoAlpha' title='Saiba mais' alt='Saiba mais'>";// animated fadeInUpBig
        echo "                                      <i class='fa fa-eye'></i>";
        echo "                                  </a>";
        echo "                              </p>";
        echo "                          </div>";
        echo "                      </div>";
        echo "                      <div class='col-sm-4'>";
        echo "                          <div class='service-icon'>";
        echo "                              <i class='fa fa-terminal'></i>";
        echo "                          </div>";
        echo "                          <div class='service-info'>";
        echo "                              <h3 id='corBrancoAlpha'>Sistemas Web e Desktop</h3>";
        echo "                              <p style='text-transform: none;'>";
        echo "                                  Um sistema pode ser web (externo ou internet) ou desktop (interno, necessitando de instalação), porém, monitorados frequentemente e elaborado cada processo de evolução do software, de forma mais fácil a atender os clientes.";
        echo "                                  <a data-scroll class='' href='#' id='corBrancoAlpha' title='Saiba mais' alt='Saiba mais'>";// animated fadeInUpBig
        echo "                                      <i class='fa fa-eye'></i>";
        echo "                                  </a>";
        echo "                              </p>";
        echo "                          </div>";
        echo "                      </div>";
        echo "                      <div class='col-sm-4'>";// wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='850ms'
        echo "                          <div class='service-icon'>";
        echo "                              <i class='fa fa-wrench'></i>";
        echo "                          </div>";
        echo "                          <div class='service-info'>";
        echo "                              <h3 id='corBrancoAlpha'>Suporte Remoto</h3>";
        echo "                              <p style='text-transform: none;'>";
        echo "                                  Consiste na manutenção de computadores e notebooks, incluindo configurações. Com o auxílio da internet, há possibilidade de fazer manutenção remota em qualquer lugar que estiver. Esse recurso é um sucesso para todos os meus clientes. Lembrando que esse recurso só é possível na manutenção preventiva.";
        echo "                                  <a data-scroll class='' href='#' id='corBrancoAlpha' title='Saiba mais' alt='Saiba mais'>";// animated fadeInUpBig
        echo "                                      <i class='fa fa-eye'></i>";
        echo "                                  </a>";
        echo "                              </p>";
        echo "                          </div>";

        echo "                      </div>";//col-sm-4

        echo "                  </div>";//fecha row
        echo "              </div>";//fecha o principal
        
    }
    
    public function telaServicos(){
        
        $s = filter_input(INPUT_GET, 's');
        
        echo "  <div id='servicos' class='parallax'>";
        echo "      <div class='container' id='fundoServicos'>";
//        echo "          <div class='row'>";
//        echo "              <div class='col-sm-12'>";
        echo "                  <h1 class='animated fadeInLeftBig' style='font-size: 30px;'>";
        echo "                      SERV<span>IÇOS</span>";
        echo "                  </h1>";
        echo "                  <div class='wow fadeIn' data-wow-duration='1000ms' data-wow-delay='600ms'>";
        echo "                      <div class='row'>";

        switch ($s){
            default :
                $this->telaInicialServicos();
                break;
            case "mar" :
                $this->servMarketingDigital();
                break;
            case "sit" :
                $this->servSitesEcommerce();
                break;
            case "pro" :
                $this->servGestaoProjetos();
                break;
            case "ana" :
                $this->servAnaliseWeb();
                break;
            case "sis" :
                $this->servSistemas();
                break;
            case "sup" :
                $this->servSuporte();
                break;
        }
        
        echo "                      </div>";//row
        echo "                  </div>";//wow
        echo "      </div>";//container
        echo "  </div><!--/#Serviços-->";
    }
    
    
    //put your code here
}
