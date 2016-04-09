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
            echo "\n".$sql."\n";
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
        
    }
    public function excluirUsuario(){
        
    }
    public function consultaUsuario(){
        
    }
    
    public function getDadosUsuario($opcao){
        switch ($opcao){
            
        }
    }
    
}
