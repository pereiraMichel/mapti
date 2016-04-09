<?php


class vMenu {

    public function menuNavegacao(){
        echo "<!-- Navigation -->";
        echo "<a id='menu-toggle' href='#' class='btn btn-dark btn-lg toggle'><i class='fa fa-bars'></i></a>";
        echo "<nav id='sidebar-wrapper'>";
        echo "  <ul class='sidebar-nav'>";
        echo "      <a id='menu-close' href='#' class='btn btn-light btn-lg pull-right toggle'><i class='fa fa-times'></i></a>";
        echo "      <li class='sidebar-brand'>";
        echo "          <a href='#top'  onclick = $('#menu-close').click(); >MAP TI - MENU</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='#top' onclick = $('#menu-close').click(); >Home</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='#seuperfil' onclick = $('#menu-close').click(); >Seu perfil</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='#servicos' onclick = $('#menu-close').click(); >Serviço(s) Contratado(s)</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='#chamado' onclick = $('#menu-close').click(); >Agendamento/ Chamado</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='#contato' onclick = $('#menu-close').click(); >Contato</a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='index.php?saida=true' >Logoff/ Sair</a>";//onclick = $('#menu-close').click(); 
        echo "      </li>";
        echo "  </ul>";
        echo "</nav>";
    }
    
}
