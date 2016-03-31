<?php

class classeAcesso {
    
    private $login;
    private $senha;
    
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
        
    }
    
}
