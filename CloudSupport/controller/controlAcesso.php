<?php


class controlAcesso {

    public function validaAcessoRestrito($login, $senha){
        if($login == ""){
            echo "Login inválido!";
        }else{
            return $login;
        }
        
        if($senha == ""){
            echo "Senha inválida!";
        }else{
            return $senha;
        }
        
    }
    
}
