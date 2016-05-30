<?php


class classeUsuario {

    //idUsuario, nome, senha, email, dataCadastro, dataAlteracao, codTipoAcesso, codCliente, codStatusUsuario
    
    private $idUsuario;
    private $nome;
    private $senha;
    private $email;
    private $dataCadastro;
    private $dataAlteracao;
    private $codTipoAcesso;
    private $codCliente;
    private $codStatusUsuario;
    private $nomeSelecionado;
    private $selectIdUsuario;
    
    function getNomeSelecionado(){
        return nomeSelecionado;
    }
    function setNomeSelecionado($nomeSelecionado){
        $this->nomeSelecionado = $nomeSelecionado;
    }
    
    function getSelectIdUsuario(){
        return $this->selectIdUsuario;
    }
    
    function setSelectIdUsuario($selectIdUsuario){
        $this->selectIdUsuario = $selectIdUsuario;
    }
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getDataAlteracao() {
        return $this->dataAlteracao;
    }

    function getCodStatusUsuario() {
        return $this->codStatusUsuario;
    }

    function getCodTipoAcesso() {
        return $this->codTipoAcesso;
    }

    function getCodCliente() {
        return $this->codCliente;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = md5($senha);
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setDataAlteracao($dataAlteracao) {
        $this->dataAlteracao = $dataAlteracao;
    }

    function setCodStatusUsuario($codStatusUsuario) {
        $this->codStatusUsuario = $codStatusUsuario;
    }

    function setCodTipoAcesso($codTipoAcesso) {
        $this->codTipoAcesso = $codTipoAcesso;
    }

    function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    public function verificaUltimoId(){

        $conexao = new conexao();
        $conexao->getConnectionLocal();
        
        try{
           
            $sql = "SELECT MAX(idUsuario) AS idUsuario FROM tblusuario";
            $resultado = mysql_query($sql);
            $dados = mysql_fetch_array($resultado);
            $novoId = $dados['idUsuario'] + 1;
            
            $this->idUsuario = $novoId;
            
//            mysql_close($resultado);
        } catch (Exception $ex) {
            echo "Houve um erro no novo ID. Erro: ".$ex->getMessage();
        }        
    }
    
    public function inserirUsuario(){
        
        $conexao = new conexao();
        $conexao->getConnectionLocal();
        
        $this->verificaUltimoId();
        
        try{
            $sql = "INSERT INTO tblusuario 
                    (idUsuario, nome, senha, email, dataCadastro, dataAlteracao, codTipoAcesso, codCliente, codStatusUsuario) 
                    VALUES 
                    (".$this->idUsuario.", '".$this->nome."', '".$this->senha."', '".$this->email."', '".$this->dataCadastro."', '".$this->dataAlteracao."', ".$this->codTipoAcesso.", ".$this->codCliente.", ".$this->codStatusUsuario.")";
//            echo "\n".$sql."\n";
            $resultado = mysql_query($sql) or die ("Problemas na inclusão do usuário. Erro: ".mysql_error());

            if($resultado){
                return true;
            }else{
                return false;
            }
            
            mysql_close($resultado);
            
        } catch (Exception $ex) {
            echo ERROEXCEPTION.$ex->getMessage();
        }
    }
    
    public function alterarUsuario(){
        try{
            $sql = "UPDATE tblusuario 
                    SET nome='".$this->nomeSelecionado."', senha='".$this->senha."', email='".$this->email."', dataAlteracao='".$this->dataAlteracao."', 
                    codTipoAcesso=".$this->codTipoAcesso.", codCliente=".$this->codCliente.", codStatusUsuario=".$this->codStatusUsuario." 
                    WHERE idUsuario=".$this->selectIdUsuario;
//            echo $sql."<br>";
            $resultado = mysql_query($sql) or die("Problemas na alteração do usuário. Erro: ".mysql_error());
            
            if($resultado){
                return true;
            }else{
                return false;
            }
            
        } catch (Exception $ex) {
            echo ERROEXCEPTION.$ex->getMessage();
        }
    }
    public function excluirUsuario(){
        try{
            $sql = "DELETE FROM tblusuario 
                    WHERE idUsuario=".$this->idUsuario;
            $resultado = mysql_query($sql) or die("Problemas na exclusão do usuário. Erro: ".mysql_error());
            
            if($resultado){
                return true;
            }else{
                return false;
            }
            
        } catch (Exception $ex) {
            echo ERROEXCEPTION.$ex->getMessage();
        }
    }
    
    public function opcaoPost($opcao){
        switch($opcao){
            case "inclusao":
                if($this->inserirUsuario()){
                    echo "<label class='text-success'>Usuário cadastrado com sucesso!</label>";
                    echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=index.php?opcao=usuarios'>";

                }else{
                    echo "<label class='text-alert'>Usuário não cadastrado. Verifique com o seu analista de sistemas.</label>";
                }
                break;
            case "alteracao":
                if($this->alterarUsuario()){
                    echo "<label class='text-success'>Alteração efetuada com sucesso!</label>";
                    echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php?opcao=usuarios'>";
                }else{
                    echo "Alteração não efetuada. Verifique com o seu analista de sistemas.";
                }
                break;
            case "exclusao":
                if($this->excluirUsuario()){
                    echo "<label class='text-success'>Usuário excluído com sucesso!</label>";
                    echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=index.php?opcao=usuarios'>";

                }
                break;
        }
    }
    
    public function consultaTabelaUsuario(){
//window.location.href='index.php?opcao=usuarios&ida=".$dados['idUsuario']."'        
        try{
            $sql = $this->getDadosUsuario(2);
            $resultado = mysql_query($sql) or die(ERROQUERY.mysql_error());
            
            if(mysql_num_rows($resultado) > 0){
                while($dados = mysql_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td width='120'>".$dados['nomeUsuario']."</td>";
                    echo "<td>".$dados['email']."</td>";
                    echo "<td width='100'>".$dados['dataCadastro']."</td>";
                    echo "<td>".$dados['tipoAcesso']."</td>";
                    echo "<td>".$dados['nomeCliente']."</td>";
                    echo "<td>".$dados['StatusUsuario']."</td>";
                    echo "<td>";// data-toggle='modal' data-target='#alteraUsuario'
                    echo "      <button class='btn btn-default' width='150' onclick=showHintEdit(".$dados['idUsuario']."); type='button' data-toggle='modal' data-target='#alteraUsuario'><i class='fa fa-pencil'></i></button>";
//                    echo "      <button class='btn btn-default' width='150' onclick=document.getElementById('idDoUsuario').value='".$dados['idUsuario']."'; type='button' data-toggle='modal' data-target='#alteraUsuario' id='botaoAltera'><i class='fa fa-pencil'></i></button>";//Funcionou
                    $idSelecionado = $dados['idUsuario'];
                    $nomeSelecionado = $dados['nomeUsuario'];
                    echo "      <button type='button' data-target='#excluirUsuario' data-toggle='modal' class='btn btn-default' onclick=\"showDeleteUser($idSelecionado, '$nomeSelecionado');\"><i class='fa fa-trash'></i></a>";
                    echo "      <a title='Consultar' href='#'><button class='btn btn-default' type='button'><i class='fa fa-search'></i></button></a>";
                    echo "</td>";
                    echo "</tr>";
              
                }
            }

//<input type="radio" name="seleccaoRadio" id="selecaoRadio" value="1" onclick="document.location.href='index.php?opcao=usuarios&id=teste';">
        
        } catch (Exception $ex) {
            echo ERROEXCEPTION.$ex->getMessage();
        }
    }

    public function consultaDadosUsuario(){
        
        try{
            $sql = $this->getDadosUsuario(1);
            $resultado = mysql_query($sql) or die(ERROQUERY.mysql_error());
            
            if($resultado > 0){
                $dados = mysql_fetch_array($resultado);
                $dadosUsuario = [
                    "nomeUsuario" => $dados['nomeUsuario'],
                    "email" => $dados['email'],
                    "dataCadUsuario" => $dados['dataUsuario'],
                    "tipoAcesso" => $dados['tipoAcesso'],
                    "nomeCliente" => $dados['nomeCliente'],
                    "dataCadastro" => $dados['dataCadastro'],
                    "status" => $dados['StatusUsuario'],
                ];
                
                return $dadosUsuario;
            }
        
        } catch (Exception $ex) {
            echo ERROEXCEPTION.$ex->getMessage();
        }
    }
    
    public function getDadosUsuario($opcao){
        switch ($opcao){
            case null:
                return null;
                break;
            case 0: //Consulta básica
                return "SELECT * FROM tblusuario";
                break;
            case 1:
                return "
                    SELECT  t.idUsuario, t.nome AS nomeUsuario, t.email, t.dataCadastro AS dataUsuario, 
                            ta.tipoAcesso, c.nome AS nomeCliente, c.dataCadastro, s.nome as StatusUsuario
                    FROM tblusuario t
                    INNER JOIN tipoAcesso ta ON t.codTipoAcesso = ta.idTipoAcesso
                    INNER JOIN cliente c ON t.codCliente = c.idCliente
                    INNER JOIN statususuario s ON t.codStatusUsuario = s.idStatus
                    WHERE t.idUsuario = ".$this->idUsuario;
                break;
            case 2:
                return "
                    SELECT  t.idUsuario, t.nome AS nomeUsuario, t.email, t.dataCadastro AS dataUsuario, 
                            ta.tipoAcesso, c.nome AS nomeCliente, c.dataCadastro, s.nome as StatusUsuario
                    FROM tblusuario t
                    INNER JOIN tipoAcesso ta ON t.codTipoAcesso = ta.idTipoAcesso
                    INNER JOIN cliente c ON t.codCliente = c.idCliente
                    INNER JOIN statususuario s ON t.codStatusUsuario = s.idStatus
                    ";
                break;
            case 3:
                return "
                    SELECT  t.idUsuario, t.nome AS nomeUsuario, t.email, t.dataCadastro AS dataUsuario, 
                            ta.tipoAcesso, c.nome AS nomeCliente, c.dataCadastro, s.nome as StatusUsuario
                    FROM tblusuario t
                    INNER JOIN tipoAcesso ta ON t.codTipoAcesso = ta.idTipoAcesso
                    INNER JOIN cliente c ON t.codCliente = c.idCliente
                    INNER JOIN statususuario s ON t.codStatusUsuario = s.idStatus
                    WHERE t.idUsuario = ".$this->selectIdUsuario;
                break;
        }
    }
    
    public function telaBoasVindas(){
        echo "<h1>BEM VINDO AO <img src='../../images/CloudSupportTelaInicial.png' title='Cloud Support - MAP TI'></h1>";
        echo "<h3>Acesse o botão 'MENU' ao lado para as demais solicitações</h3>";
        echo "<br>";
        echo "<a href='index.php?opcao=chamado' class='btn btn-dark btn-lg'>Abrir um Chamado</a>";
        
    }
    
    public function telaUsuarios(){
        echo "<div class='panel panel-default'>";
        echo "  <div class='panel-heading'>";
        echo "      <h3 class='panel-title'><b>Usuários</b></h3>";
        echo "  </div>";
        echo "  <div class='panel-body'>";
        echo "    <div class='col-md-11'>";
        echo "      <table class='table'>";
        echo "          <tr>";
        echo "              <td>";
        echo "                  Nome";
        echo "              </td>";
        echo "              <td>";
        echo "                  E-mail";
        echo "              </td>";
        echo "              <td>";
        echo "                  Data Cadastro";
        echo "              </td>";
        echo "              <td>";
        echo "                  Tipo de Acesso";
        echo "              </td>";
        echo "              <td>";
        echo "                  Cliente";
        echo "              </td>";
        echo "              <td>";
        echo "                  Status";
        echo "              </td>";
        echo "              <td>";
        echo "                  Transações";
        echo "              </td>";
        echo "          </tr>";
        $this->consultaTabelaUsuario();
        echo "      </table>";
        echo "    </div>";
        echo "    <div class='col-md-1'>";
        echo "      <button class='btn btn-primary' width='150' type='button' data-toggle='modal' data-target='#novoUsuario' onclick = $('#novoUsuario').click();><i class='fa fa-user'></i> Novo</button>";
        echo "      <br/><br/>";
        echo "      <input type='hidden' name='idUsuario' id='idUsuario'>";
        echo "      <label name='mensagem' id='mensagem'></label>";
        echo "    </div>";
        echo "  </div>";
        echo "</div>";
        
        $this->modalNovoUsuario();
        $this->modalExcluiUsuario();

        $edicao = filter_input(INPUT_GET, 'altera');
        
        if($edicao === "sim"){
            $this->telaAlteraUsuarios();
        }
        
    }
    
    public function telaAlteraUsuarios(){

        
        $idSelecionado = filter_input(INPUT_GET, 'idaltera');
 
        $sql = " 
                    SELECT  t.idUsuario, t.nome AS nomeUsuario, t.senha, t.email, t.dataCadastro AS dataUsuario, ta.idTipoAcesso AS IdTipoAcesso, ta.tipoAcesso AS tipoAcesso, c.idCliente AS IdCliente, c.nome AS nomeCliente, c.dataCadastro, s.nome as StatusUsuario, s.idStatus AS IdStatus
                    FROM tblusuario t
                    INNER JOIN tipoAcesso ta ON t.codTipoAcesso = ta.idTipoAcesso
                    INNER JOIN cliente c ON t.codCliente = c.idCliente
                    INNER JOIN statususuario s ON t.codStatusUsuario = s.idStatus
                    WHERE t.idUsuario = ".$idSelecionado;
//        echo $sql."<br>";
        $resultado = mysql_query($sql) or die("Não foi possível efetuar a consulta. Verifique o comando SQL. Erro: ".mysql_error());
        
        if(mysql_num_rows($resultado) > 0){
            
            $dados = mysql_fetch_array($resultado);
        
            echo "<div class='panel panel-default'>";
            echo "  <div class='panel-heading'>";
            if(empty($dados['nomeUsuario'])){
                $usuario = "Sem nome";
            }else{
                $usuario = $dados['nomeUsuario'];
            }
            echo "      <h3 class='panel-title'><b>Alteração do Usuário '".$usuario."'</b></h3>";
            echo "  </div>";
            echo "  <div class='panel-body'>";
            echo "    <div class='col-md-11'>";
            echo "          <form name='alteraUsuario' method='post' action='index.php?opcao=alterausuarios&altera=sim&idaltera=".$idSelecionado."'>";
            echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
            echo "                  <div class='col-sm-6'>";
            echo "                      <div class='form-group'>";
            echo "                          <input type='hidden' name='idDoUsuarioSelecionado' id='idDoUsuarioSelecionado' class='form-control' value='".$idSelecionado."'>";
            echo "                          <input type='hidden' name='dataAlteracao' id='dataAlteracao' class='form-control' value='".date('Y-m-d')."'>";
            echo "                          <input type='hidden' name='formPost' id='formPost' class='form-control' value='alteracao'>";
            echo "                          <input type='text' name='nomeDoUsuario' id='nomeDoUsuario' class='form-control' placeholder='Login' required='required' value='".$dados['nomeUsuario']."'>";
            echo "                      </div>";
            echo "                  </div>";
            echo "                  <div class='col-sm-6'>";
            echo "                      <div class='form-group'>";
            echo "                          <input type='password' name='senha' class='form-control' placeholder='senha' required='required' value='".$dados['senha']."'>";
            echo "                      </div>";
            echo "                  </div>";
            echo "              </div>";
            echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
            echo "                  <div class='col-sm-6'>";
            echo "                      <div class='form-group'>";
            echo "                          <input type='email' name='email' class='form-control' placeholder='E-mail' required='required' value='".$dados['email']."'>";
            echo "                      </div>";
            echo "                  </div>";
            echo "                  <div class='col-sm-6'>";
            echo "                      <div class='form-group'>";
            echo "                          &nbsp;";
            echo "                      </div>";
            echo "                  </div>";
            echo "              </div>";
            echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
            echo "                  <div class='col-sm-6'>";
            echo "                      <div class='form-group'>";
                                                $acesso = new classeTipoAcesso();
            echo "                          <select name='tipoacesso' class='form-control'>";
            echo "                              <option value='".$dados['IdTipoAcesso']."'>".$dados['tipoAcesso']."</option>";
            echo "                              <option value='nulo'>&nbsp;</option>";
                                                $acesso->consultaComboTipoAcesso();
            echo "                          </select>";
            echo "                      </div>";
            echo "                  </div>";
            echo "                  <div class='col-sm-6'>";
            echo "                      <div class='form-group'>";
            echo "                          <select name='status' class='form-control'>";
            echo "                              <option value='".$dados['IdStatus']."'>".$dados['StatusUsuario']."</option>";
            echo "                              <option value='nulo'>&nbsp;</option>";
                                                $status = new classeStatus();
                                                $status->consultaComboStatusUsuario();
            echo "                          </select>";
            echo "                      </div>";
            echo "                  </div>";
            echo "              </div>";
            echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
            echo "                  <div class='col-sm-12'>";
            echo "                      <div class='form-group'>";
            echo "                          <select name='cliente' class='form-control'>";
            echo "                              <option value='".$dados['IdCliente']."'>".$dados['nomeCliente']."</option>";
            echo "                              <option value='nulo'>&nbsp;</option>";
                                                $clientes = new classeCliente();
                                                $clientes->consultaComboClientes();
            echo "                          </select>";
            echo "                      </div>";
            echo "                  </div>";
            echo "              </div>";
            echo "              <div class='modal-footer'>";
            echo "                  <button type='button' onclick=document.location.href='index.php?opcao=usuarios' class='btn btn-default' data-dismiss='modal'>Voltar</button>";
            echo "                  <button type='submit' class='btn btn-primary'>Salvar</button>";
            echo "              </div>";
            echo "          </form>";

            if($_POST){
                $idUsuarioSelecionado = filter_input(INPUT_POST, "idDoUsuarioSelecionado");
                $nome = filter_input(INPUT_POST, "nomeDoUsuario");
                $senha = filter_input(INPUT_POST, "senha");
                $email = filter_input(INPUT_POST, "email");
                $status = filter_input(INPUT_POST, "status");
                $tipoAcesso = filter_input(INPUT_POST, "tipoacesso");
                $cliente = filter_input(INPUT_POST, "cliente");
                $dataAlteracao = filter_input(INPUT_POST, "dataAlteracao");
                
                $this->nomeSelecionado = $nome;
                $this->senha = $senha;
                $this->email = $email;
                $this->codStatusUsuario = $status;
                $this->codTipoAcesso = $tipoAcesso;
                $this->codCliente = $cliente;
                $this->dataAlteracao = $dataAlteracao;
                $this->selectIdUsuario = $idUsuarioSelecionado;
                
                $this->opcaoPost(filter_input(INPUT_POST, 'formPost'));
            }
            
            echo "      </div>";
            echo "    </div>";//fecha o col-sm-11
            echo "  </div>";//fecha panel-body
            echo "</div>";//fecha panel-default
            
        }
    }
    
    public function modalNovoUsuario(){
        echo "<script>$('novoUsuario').on('show.bs.modal', function(){";
        echo "$('#myInput').focus();";
        echo "});</script>"; 
//        echo "<script>$(document).ready(function(){";
//        echo "$('#novoUsuario').modal('show');";
//        echo "});</script>"; 
        
        echo "<!-- Modal -->";
        echo "<div class='modal fade' id='novoUsuario' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
        echo "  <div class='modal-dialog' role='document'>";
        echo "    <div class='modal-content'>";
        echo "      <div class='modal-header'>";
        echo "        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo "        <h4 class='modal-title' id='myModalLabel'>Novo Usuário</h4>";
        echo "      </div>";
        echo "      <div class='modal-body'>";
        
        echo "          <form name='incluirUsuario' method='post' action='index.php?opcao=usuarios&inclusao=sim'>";
        echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          <input type='hidden' name='formPost' id='formPost' value='inclusao' class='form-control'>";
        echo "                          <input type='text' name='login' class='form-control' placeholder='Login' required='required'>";
        echo "                      </div>";
        echo "                  </div>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          <input type='password' name='senha' class='form-control' placeholder='senha' required='required'>";
        echo "                      </div>";
        echo "                  </div>";
        echo "              </div>";
        echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          <input type='email' name='email' class='form-control' placeholder='E-mail' required='required'>";
        echo "                      </div>";
        echo "                  </div>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          &nbsp;";
        echo "                      </div>";
        echo "                  </div>";
        echo "              </div>";
        echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          <select name='tipoacesso' class='form-control'>";
        echo "                              <option value='acesso'>Tipo de Acesso</option>";
        echo "                              <option value='nulo'>&nbsp;</option>";
                                            $acesso = new classeTipoAcesso();
                                            $acesso->consultaComboTipoAcesso();
        echo "                          </select>";
        echo "                      </div>";
        echo "                  </div>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          <select name='status' class='form-control'>";
        echo "                              <option value='Status'>Status</option>";
        echo "                              <option value='nulo'>&nbsp;</option>";
                                            $status = new classeStatus();
                                            $status->consultaComboStatusUsuario();
        echo "                          </select>";
        echo "                      </div>";
        echo "                  </div>";
        echo "              </div>";
        echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                  <div class='col-sm-12'>";
        echo "                      <div class='form-group'>";
        echo "                          <select name='cliente' class='form-control'>";
        echo "                              <option value='Cliente'>Cliente</option>";
        echo "                              <option value='nulo'>&nbsp;</option>";
                                            $clientes = new classeCliente();
                                            $clientes->consultaComboClientes();
        echo "                          </select>";
        echo "                      </div>";
        echo "                  </div>";
        echo "              </div>";
        echo "              <div class='modal-footer'>";
        echo "                  <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>";
        echo "                  <button type='submit' class='btn btn-primary'>Salvar</button>";
        echo "              </div>";
        echo "          </form>";
        
        echo "      </div>";
        echo "    </div>";
        echo "  </div>";
        echo "</div>";
        
        if($_POST){
            $nome = filter_input(INPUT_POST, "login");
            $senha = filter_input(INPUT_POST, "senha");
            $email = filter_input(INPUT_POST, "email");
            $tipoacesso = filter_input(INPUT_POST, "tipoacesso");
            $status = filter_input(INPUT_POST, "status");
            $cliente = filter_input(INPUT_POST, "cliente");
            $data = date('Y-m-d');
            
            $this->setNome($nome);
            $this->setSenha($senha);
            $this->setEmail($email);
            $this->setDataCadastro($data);
            $this->setDataAlteracao($data);
            $this->setCodCliente($cliente);
            $this->setCodStatusUsuario($status);
            $this->setCodTipoAcesso($tipoacesso);

            $this->opcaoPost(filter_input(INPUT_POST, 'formPost'));
        }
        
    }

    public function modalExcluiUsuario(){
        
        echo "<script>$('excluirUsuario').on('show.bs.modal', function(){";
        echo "$('#myInput').focus();";
        echo "});</script>";
        
        echo "<!-- Modal -->";
        echo "<div class='modal fade' id='excluirUsuario' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
        echo "  <div class='modal-dialog' role='document'>";
        echo "    <div class='modal-content'>";
        echo "      <div class='modal-header'>";
        echo "        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo "        <h4 class='modal-title' id='myModalLabel'>Excluir Usuário</h4>";
        echo "      </div>";
        echo "      <div class='modal-body'>";
        echo "          <form name='excluiUsuario' method='post' action='index.php?opcao=usuarios'>";
        echo "              Confirma exclusão do usuário ?";
        echo "              <input type='hidden' name='idUsuarioSelecionado' id='idUsuarioSelecionado'>";//Entra com as informações aqui.
        echo "              <input type='hidden' name='formPost' id='formPost' value='exclusao'>";//Entra com as informações aqui.
        echo "              <b><div name='nomeUsuarioSelecionado' id='nomeUsuarioSelecionado'></div></b>";
        echo "      </div>";
        echo "      <div class='modal-footer'>";
        echo "        <button type='button' class='btn btn-default' data-dismiss='modal'>Não</button>";
        echo "        <button type='submit' class='btn btn-primary'>Sim</button>";
        echo "      </div>";
        echo "          </form>";
        echo "    </div>";
        echo "  </div>";
        echo "</div>";
        if($_POST){
            $this->idUsuario = filter_input(INPUT_POST, 'idUsuarioSelecionado');
            $this->opcaoPost(filter_input(INPUT_POST, 'formPost'));
        }
    }
    
    public function modalConsultaUsuario(){
        echo "<script>$('novoUsuario').on('show.bs.modal', function(){";
        echo "$('#myInput').focus();";
        echo "});</script>";
        
        echo "<!-- Modal -->";
        echo "<div class='modal fade' id='consultaUsuario' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
        echo "  <div class='modal-dialog' role='document'>";
        echo "    <div class='modal-content'>";
        echo "      <div class='modal-header'>";
        echo "        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        echo "        <h4 class='modal-title' id='myModalLabel'>Novo Usuário</h4>";
        echo "      </div>";
        echo "      <div class='modal-body'>";
        echo "        ...";//Entra com as informações aqui.
        echo "      </div>";
        echo "      <div class='modal-footer'>";
        echo "        <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>";
        echo "        <button type='button' class='btn btn-primary'>Salvar</button>";
        echo "      </div>";
        echo "    </div>";
        echo "  </div>";
        echo "</div>";        
    }
    
}
