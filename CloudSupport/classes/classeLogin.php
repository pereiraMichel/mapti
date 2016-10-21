<?php


class classeLogin {

    public function telaSuperior(){
       
        echo "<div class='col-sm-12'>";
        echo "  <img src='../images/logoMapTi200x100.png' title='MAP TI'>";
        echo "</div>";

    }
    public function telaSuperiorSupport(){
       
        echo "<div class='col-sm-12'>";
        echo "  <img src='../images/CloudSupportTelaInicial.png' title='MAP TI'>";
        echo "</div>";

    }
    
    public function telaLogin(){
//        echo "<p style='height: 200px;'>&nbsp;</p>";
        echo "<form id='contact-form' name='contact-form' method='post' action='acesso.php'>";
        echo "  <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
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

    }

    public function primeiroAcesso(){
        
        //Pega a conexão
        $conexao = new conexao();
        $conexao->getConnectionLocal();
        
        //Início à pesquisa da tabela de tipos de acesso
        $tipoacesso = new classeTipoAcesso();
        
        //Início à pesquisa de clientes
        $clientes = new classeCliente();
        
        //Início à pesquisa dos status
        $statusUsuario = new classeStatus();
        
        echo "<form id='contact-form' name='contact-form' method='post' action='primeiroAcesso.php'>";
        echo "  <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
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
        echo "      <div class='col-sm-12'>";
        echo "          <div class='form-group'>";
        echo "              <input type='text' name='email' class='form-control' placeholder='E-mail' required='required'>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='col-sm-6'>";
        echo "          <div class='form-group'>";
        echo "              <select name='cliente' class='form-control'>";
        echo "                  <option value='99'>Cliente</option>";
        echo "                  <option value=''>&nbsp;</option>";
        echo                    $clientes->consultaComboClientes();
        echo "              </select>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='col-sm-6'>";
        echo "          <div class='form-group'>";
        echo "              <select name='tipoAcesso' class='form-control'>";
        echo "                  <option value='99'>Tipo de Acesso</option>";
        echo "                  <option value=''>&nbsp;</option>";
        echo                    $tipoacesso->consultaComboTipoAcesso();
        echo "              </select>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='col-sm-12'>";
        echo "          <div class='form-group'>";
        echo "              <select name='statusUsuario' class='form-control'>";
        echo "                  <option value='99'>Status</option>";
        echo "                  <option value=''>&nbsp;</option>";
        echo                    $statusUsuario->consultaComboStatusUsuario();
        echo "              </select>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
        echo "  <div class='form-group'>";
        echo "      <button type='submit' class='btn-submit'>Incluir</button>";
        echo "  </div>";
        echo "  <input type='hidden' name='dataCadastro' id='dataCadastro' value='".date('Y-m-d')."'>";
        echo "  <input type='hidden' name='dataAlteracao' id='dataCadastro' value='".date('Y-m-d')."'>";
        echo "</form>";

    }
    
    
}
