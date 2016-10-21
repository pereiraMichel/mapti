<?php

/*
 * Perfil do Usuário
 */

/**
 * Description of classePerfil
 *
 * @author Debug
 */
class classePerfil {
    
    private $idUsuarioPerfil;
    private $nomeUsuarioPerfil;
    private $senhaUsuarioPerfil;
    private $dataUsuarioPerfil;
    private $tipoAcessoPerfil;
    private $nomeClientePerfil;
    private $statusUsuarioPerfil;
    
    function getIdUsuarioPerfil() {
        return $this->idUsuarioPerfil;
    }

    function getNomeUsuarioPerfil() {
        return $this->nomeUsuarioPerfil;
    }

    function getSenhaUsuarioPerfil() {
        return $this->senhaUsuarioPerfil;
    }

    function getDataUsuarioPerfil() {
        return $this->dataUsuarioPerfil;
    }

    function getTipoAcessoPerfil() {
        return $this->tipoAcessoPerfil;
    }

    function getNomeClientePerfil() {
        return $this->nomeClientePerfil;
    }

    function getStatusUsuarioPerfil() {
        return $this->statusUsuarioPerfil;
    }

    function setIdUsuarioPerfil($idUsuarioPerfil) {
        $this->idUsuarioPerfil = $idUsuarioPerfil;
    }

    function setNomeUsuarioPerfil($nomeUsuarioPerfil) {
        $this->nomeUsuarioPerfil = $nomeUsuarioPerfil;
    }

    function setSenhaUsuarioPerfil($senhaUsuarioPerfil) {
        $this->senhaUsuarioPerfil = $senhaUsuarioPerfil;
    }

    function setDataUsuarioPerfil($dataUsuarioPerfil) {
        $this->dataUsuarioPerfil = $dataUsuarioPerfil;
    }

    function setTipoAcessoPerfil($tipoAcessoPerfil) {
        $this->tipoAcessoPerfil = $tipoAcessoPerfil;
    }

    function setNomeClientePerfil($nomeClientePerfil) {
        $this->nomeClientePerfil = $nomeClientePerfil;
    }

    function setStatusUsuarioPerfil($statusUsuarioPerfil) {
        $this->statusUsuarioPerfil = $statusUsuarioPerfil;
    }

    public function telaPerfil(){
        echo "<div class='panel panel-default'>";
        echo "  <div class='panel-heading'>";
        echo "      <h3 class='panel-title'><b>Seu Perfil</b></h3>";
        echo "  </div>";
        echo "  <form name='formPerfil' class='form-horizontal' method='post' action='index.php?opcao=seuperfil'>";
        echo "      <div class='panel-body control-group'>";
        echo            $this->consultaTabelaPerfilUsuario();
        echo "      </div>";
        echo "    <br/><br/>";
        echo "    <input type='hidden' name='idUsuario' id='idUsuario' value='".$this->idUsuarioPerfil."'>";
        echo "    <label name='mensagem' id='mensagem'></label>";
        echo "  </form>";
        echo "</div>";
        
    }
    
    public function getPerfil(){
        $this->nomeUsuarioPerfil = $_SESSION['idUsuario'];
        return "CALL CONSULTA_USUARIO_ESPECIFICO(".$this->nomeUsuarioPerfil.")";
    }
    
    public function consultaTabelaPerfilUsuario(){
        $statusUsuario = new classeStatus();
        $sql = $this->getPerfil();
        $resultado = mysql_query($sql) or die("Há algum problema no comando SQL. Verifique sob o erro: ".mysql_error());
        if(mysql_num_rows($resultado) > 0){
            $dados = mysql_fetch_array($resultado);
            $this->nomeClientePerfil = $dados['nomeCliente'];
            $status = $dados['StatusUsuario'];
            $idstatus = $dados['codAcesso'];
            $acesso = $dados['tipoAcesso'];
            $dataCadastro = $dados['dataUsuario'];
            $dataAlteracao = $dados['dataAlteracao'];
        }        
        
        echo "      <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "          <div class='col-sm-4'>";
        echo "              &nbsp;";
        echo "          </div>";
        echo "          <div class='col-sm-4'>";
//        echo "              <div class='col-sm-3'>";
        echo "                  <div class='control-group' align='center'>";
        echo "                      <button type='button' class='btn btn-large btn-block btn-primary'>Alterar a sua senha</button>";
        echo "                  </div>";
        echo "                  <br/>";
        if(!$_SESSION['acesso'] == "ANALISTA" && !$_SESSION['acesso'] == "ADMINISTRADOR"){ // analista ou administrador
            $inputDisabled = "disabled";
        }else{
            $inputDisabled = "";
        }
        echo "                  <div class='control-group'>";
        echo "                      <input type='text' name='nome' class='form-control' placeholder='Empresa filiada' required='required' value='".$this->nomeClientePerfil."' disabled>";
        echo "                  </div>";
        echo "                  <br/>";
        
        echo "                  <div class='control-group'>";

        if(!$inputDisabled == "disabled"){
        echo "                      <select name='status' class='form-control'>";
        echo "                          <option value='$idstatus'>".$status."</option>";
        echo "                          <option value=''>&nbsp;</option>";
        $statusUsuario->consultaComboStatusUsuario();
        echo "                      </select>";
        }else{
            echo "                      <input type='text' name='status' class='form-control' placeholder='Status' required='required' value='".$status."' $inputDisabled>";
        }
        echo "                  </div>";
        
        echo "                  <br/>";
        echo "                  <div class='control-group'>";
        echo "                      <input type='text' name='acesso' class='form-control' placeholder='Acesso' required='required' value='".$acesso."' $inputDisabled>";
        echo "                  </div>";
        echo "                  <br/>";
        echo "                  <div class='control-group'>";
        echo "                      <input type='text' name='dataCadastro' class='form-control' placeholder='Data de Cadastro' required='required' value='".$dataCadastro."' disabled>";
        echo "                  </div>";
        echo "                  <br/>";
        echo "                  <div class='control-group'>";
        echo "                      <input type='text' name='dataAlteracao' class='form-control' placeholder='Data última alteração' required='required' value='".$dataAlteracao."' disabled>";
        echo "                  </div>";
  //      echo "              </div>";
        echo "          </div>";
        echo "          <div class='col-sm-4'>";
        echo "              &nbsp;";
        echo "          </div>";
        echo "      </div>";
        
}
    
    
}
