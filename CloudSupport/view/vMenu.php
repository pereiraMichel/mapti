<?php


class vMenu {

    public function menuNavegacao(){
        echo "<!-- Navigation -->";
        echo "<a id='menu-toggle' href='#' class='btn btn-dark btn-lg toggle'><i class='fa fa-bars'></i></a>";
        echo "<nav id='sidebar-wrapper'>";
        echo "  <ul class='sidebar-nav sub-menu'>";
        echo "      <a id='menu-close' href='#' class='btn btn-light btn-lg pull-right toggle'><i class='fa fa-times'></i></a>";
        echo "      <li class='sidebar-brand'>";
        echo "          <a href='#'  onclick = $('#menu-close').click(); >MAP TI - MENU</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php' onclick = $('#menu-close').click(); >Home</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php?opcao=seuperfil' onclick = $('#menu-close').click(); >Seu perfil</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php?opcao=servicos' onclick = $('#menu-close').click(); >Serviço(s) Contratado(s)</a>";
        echo "      </li>";
        echo "      <li class='sub-menu'>";
        echo "          <a href='#' onclick='abreSubMenu();'>";// onclick = $('#menu-close').click(); 
//        echo "      <li class='dropdown'>";
//        echo "          <a data-toggle='dropdown' class='dropdown-toggle' data-submenu>";// onclick = $('#menu-close').click(); 
        echo "              Financeiro";
        echo "              <span class='caret'></span>";
        echo "          </a>";
        echo "          <div id='subMenu' style='display: none;'>";
        echo "              <ul>";
//        echo "              <ul class='dropdown-menu pull-right'>";
        echo "                  <li>";
        echo "                      <a href='index.php?opcao=financeiro&tarefa=historico'>";
        echo "                          Histórico";
        echo "                      </a>";
        echo "                  </li>";
        echo "                  <li>";
        echo "                      <a href='index.php?opcao=financeiro&tarefa=recibos'>";
        echo "                          Recibos";
        echo "                      </a>";
        echo "                  </li>";
        echo "              </ul>";
        echo "          </div>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php?opcao=chamado' onclick = $('#menu-close').click(); >Agendamento/ Chamado</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php?opcao=usuarios' onclick = $('#menu-close').click(); >Usuários</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php?opcao=contato' onclick = $('#menu-close').click(); >Contato</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php?saida=true' >Logoff/ Sair</a>";//onclick = $('#menu-close').click(); 
        echo "      </li>";
        echo "  </ul>";
        echo "</nav>";
    }
    
    
    public function menu(){
//        echo "<a id='menu-toggle' href='#' class='btn btn-dark btn-lg toggle'><i class='fa fa-bars'></i></a>";
        echo "<nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>";
        echo "      <div class='container'>";
        echo "      <div class='navbar-header page-scroll'>";
        echo "          <a class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "          </a>";        
        echo "          <a href='index.php' class='navbar-brand'>";
        echo "              <img src='../../images/CloudSupportTelaInicial.png' title='Cloud Support - MAP TI'>";
        echo "          </a>";
//        echo "          </div>";
        echo "              <div class='collapse navbar-collapse navbar-right navbar-main-collapse'>";
        echo "                  <ul class='nav navbar-nav'>";
//        echo "                      <li>";
//        echo "                          <a href='index.php' onclick = $('#menu-close').click(); >Home</a>";
//        echo "                      </li>";
        echo "                      <li>";
        echo "                          <a href='index.php?opcao=seuperfil' onclick = $('#menu-close').click(); >Seu perfil</a>";
        echo "                      </li>";
        echo "                      <li>";
        echo "                          <a href='index.php?opcao=servicos' onclick = $('#menu-close').click(); >Serviço(s) Contratado(s)</a>";
        echo "                      </li>";
        echo "                      <li class='sub-menu'>";
        echo "                          <a href='#' onclick='abreSubMenu();'>";
        echo "                              Financeiro";
        echo "                              <span class='caret'></span>";
        echo "                          </a>";
        echo "                          <div id='subMenu' style='display: none;'>";
        echo "                              <ul>";
        echo "                                  <li>";
        echo "                                      <a href='index.php?opcao=financeiro&tarefa=historico'>";
        echo "                                          Histórico";
        echo "                                      </a>";
        echo "                                  </li>";
        echo "                                  <li>";
        echo "                                      <a href='index.php?opcao=financeiro&tarefa=recibos'>";
        echo "                                          Recibos";
        echo "                                      </a>";
        echo "                                  </li>";
        echo "                              </ul>";
        echo "                          </div>";
        echo "                      </li>";
        echo "                      <li>";
        echo "                          <a href='index.php?opcao=chamado' onclick = $('#menu-close').click(); >Agendamento/ Chamado</a>";
        echo "                      </li>";
        echo "                      <li>";
        echo "                          <a href='index.php?opcao=usuarios' onclick = $('#menu-close').click(); >Usuários</a>";
        echo "                      </li>";
        echo "                      <li>";
        echo "                          <a href='index.php?opcao=contato' onclick = $('#menu-close').click(); >Contato</a>";
        echo "                      </li>";
        echo "                      <li>";
        echo "                          <a href='index.php?saida=true' >Logoff/ Sair</a>"; 
        echo "                      </li>";
        echo "                  </ul>";
        echo "              </div>";
        echo "      </div>";//fecha o navbar-header page-scroll
        echo "      </div>";//fecha o container
        echo "</nav>";
    }
    
    
    
}
