<?php

class classeAcesso {
    
    private $login;
    private $senha;
    private $idUsuario;
    
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function setLogin($login){
        $this->login = $login;
    }
    
    public function setSenha($senha){
        $this->senha = md5($senha);
    }
    
    public function getLogin(){
        return $this->login;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function validaUsuario(){

        $conexao = new conexao();
        $conexao->getConnectionLocal();
        
        try{
            $sql = "SELECT * FROM tblusuario WHERE nome = '".$this->login."' AND senha = '".$this->senha."'";
            $resultado = mysql_query($sql) or die("Problemas na execução do usuário. Erro: ".mysql_error());
            $dados = mysql_fetch_array($resultado);
            if(!$dados == ""){
                $this->idUsuario = $dados['idUsuario'];
            }
            
            return true;


        } catch (Exception $ex) {
            echo "Conexão não estabelecida. Verifique sob o erro: ".$ex->getMessage();
        }
    }
    
}
