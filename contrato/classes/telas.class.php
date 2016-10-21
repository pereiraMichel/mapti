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
class telas {
    
    public function telaSuperior(){
       
        echo "<div class='col-sm-12'>";
        echo "  <img src='../images/logoMapTi200x100.png' title='MAP TI'>";
        echo "</div>";

    }
    public function login(){
        echo "<form id='contact-form' name='contact-form' method='post'>";
        echo "  <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
//        echo "      <div class='col-sm-12'>";
//        echo "      <select name='tipo' class='form-control'>";
////        echo "          <option value='usuario'></option>";
//        echo "          <option value='selecione'>Selecione</option>";
//        echo "          <option value=''>--------------------</option>";
//        echo "          <option value='contratante'>Contratante</option>";
//        echo "          <option value='testemunha1'>Jorge - Testemunha</option>";
//        echo "          <option value='testemunha2'>Gilberto - Testemunha</option>";
//        echo "      </select>";
//        echo "      </div>";
//        echo "      <p style='height: 70px;'>&nbsp;</p>";
        echo "      <div class='col-sm-6'>";
        echo "          <div class='form-group'>";
        echo "              <input type='text' name='login' class='form-control' placeholder='Login' required='required'>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='col-sm-6'>";
        echo "          <div class='form-group'>";
        echo "              <input type='password' name='senha' class='form-control' placeholder='senha' required='required'>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
        echo "  <div class='form-group'>";
        echo "      <button type='submit' class='btn-submit'>Acessar</button>";
        echo "  </div>";
        echo "</form>";
        
        if($_POST){
            
            $xmlOut = new xml();
            
            $login = addslashes($_POST['login']);
            $senha = addslashes($_POST['senha']);
//            $tipo = addslashes($_POST['tipo']);
            
//            if($tipo == ""){
//                header("Location: index.php?erro=2");
//            }
            
            $xmlOut->leituraXmlUsuario($login, $senha);
            
        }
        
    }
    
    public function telaInicial(){
        echo "<h1 class='page-header'>Cloud Contratos</h1>";
        echo "  <div class='row placeholders'>";
        echo "      <div class='col-xs-6 col-sm-3 placeholder'>";
        echo "      <a href='inicio.php?m=cs' title='Contrato de Serviços'>";
        echo "          <img src='images/tasks.png' class='img-responsive' width='100' height='100'>";
        echo "          <h4>Contrato de Serviços</h4>";
        echo "          <span class='text-muted'>Contrato de prestaçao de serviços - Testemunhas - Contratante - Contratada </span>";
        echo "      </a>";
        echo "      </div>";
        echo "      <div class='col-xs-6 col-sm-3 placeholder'>";
        echo "          <img src='images/registro1.jpg' class='img-responsive' width='170' height='170'>";
        echo "          <h4>Serviços</h4>";
        echo "          <span class='text-muted'>Serviços contratados - Serviços disponiveis</span>";
        echo "      </div>";
        echo "      <div class='col-xs-6 col-sm-3 placeholder'>";
        echo "          <img src='images/analiseEstatistica.png' class='img-responsive' width='150' height='150'>";
        echo "          <h4>Acompanhento</h4>";
        echo "          <span class='text-muted'>Acompanhe o progresso do projeto - Gráfico de Gantt</span>";
        echo "      </div>";
        echo "      <div class='col-xs-6 col-sm-3 placeholder'>";
        echo "          <img src='images/estatistica2.png' class='img-responsive' width='160' height='160'>";
        echo "          <h4>Financeiro</h4>";
        echo "          <span class='text-muted'>Se foi efetuado o parcelamento, acompanhe o histórico, assim como a impressao do recibo.</span>";
        echo "      </div>";
        echo "  </div>";
    }
    public function telaInicialContrato(){
        echo "<h1 class='page-header'>Contrato de Prestação de Serviços</h1>";
    }
    
    public function menuEsquerdoPrincipal(){
        echo "  <ul class='nav nav-sidebar'>";
        echo "      <li><a href='inicio.php?m=cs' title='Contrato de Prestação de Serviços, Testemunhas, Contratante, Contratada'>Contrato de Serviços</a></li>";
        echo "      <li><a href='#' title='Serviços contratados e disponiveis'>Serviços</a></li>";
        echo "      <li><a href='#' title='Progresso do projeto e gráficos'>Acompanhamento</a></li>";
        echo "      <li><a href='#' title='Histórico, Parcelas e Recibo'>Financeiro</a></li>";
        echo "  </ul>";
        
    }
    public function menuEsquerdoContrato(){
        echo "  <ul class='nav nav-sidebar'>";
        echo "      <li><a href='inicio.php?m=cs&s=01' title='Preencha os campos'>Contratante/ Contratada</a></li>";
        echo "      <li><a href='inicio.php?m=cs&s=02' title='Testemunhas do contrato'>Testemunhas</a></li>";
        echo "      <li><a href='inicio.php?m=cs&s=03' title='Contrato de prestação de serviços'>Contrato</a></li>";
        $serv = filter_input(INPUT_GET, 's');
        
        if($serv === '03'){
        echo "      <li class='active'><a href='#' title=''>Contrato em itens<span class='sr-only'>(current)</span></a></li>";
        echo "      <li><a href='#objetoContrato' title='Do Objeto'>Do Objeto do Contrato</a></li>";
        echo "      <li><a href='#execucao' title='Da Execução'>Da Execução</a></li>";
        echo "      <li><a href='#protecao' title='Da Proteção do Software'>Da Proteção do Software</a></li>";
        echo "      <li><a href='#pagamento' title='Do Pagamento'>Do Pagamento</a></li>";
        echo "      <li><a href='#rescisao' title='Da Rescisão'>Da Rescisão</a></li>";
        echo "      <li><a href='#prazo' title='Do Prazo'>Do Prazo</a></li>";
        echo "      <li><a href='#foro' title='Do Foro'>Do Foro</a></li>";
        echo "      <li><a href='#testemunhas' title='Testemunhas'>Testemunhas</a></li>";
        }
        echo "  </ul>";
                      
        
    }
    
}
