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
//        $conexao = conexao::getConnectionLocal();
//            $conexao->prepare($sql);
        
        try{
            $sql = "SELECT * FROM tblusuario WHERE nome = '".$this->login."' AND senha = '".$this->senha."'";
            $resultado = mysql_query($sql) or die("Problemas na execução do usuário. Erro: ".mysql_error());
            if(mysql_num_rows($resultado) > 0){
                $dados = mysql_fetch_array($resultado);
                $this->setIdUsuario($dados['idUsuario']);
                return true;
            }else{
                return false;
            }
            

        } catch (Exception $ex) {
            echo "Conexão não estabelecida. Verifique sob o erro: ".$ex->getMessage();
        }
    }
    
}
