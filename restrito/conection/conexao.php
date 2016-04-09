<?php


class conexao {

    private $loginBanco;
    private $senhaBanco;
    private $servidor;
    private $porta;
    private $database;
    
    public function setLoginBanco($login){
        $this->loginBanco = $login;
    }
    public function setSenhaBanco($senha){
        $this->senhaBanco = $senha;
    }
    public function setServidorBanco($servidor){
        $this->servidor = $servidor;
    }
    public function setPortaBanco($porta){
        $this->porta = $porta;
    }
    public function setDatabase($database){
        $this->database = $database;
    }
    
    public function getConnectionLocal(){
        
        try{
            $ini = parse_ini_file("config.ini", TRUE);

            $this->setLoginBanco(base64_decode($ini['local']['usuario']));
            $this->setSenhaBanco(base64_decode($ini['local']['senha']));
            $this->setServidorBanco(base64_decode($ini['local']['server']));
            $this->setPortaBanco(base64_decode($ini['local']['porta']));
            $this->setDatabase(base64_decode($ini['local']['database']));

            $conecta = mysql_connect($this->servidor, $this->loginBanco, $this->senhaBanco) or die("Erro ao conectar o banco de dados. Especificação técnica: ".mysql_error());

            mysql_select_db($this->database, $conecta);
            mysql_set_charset('utf8', $conecta);

//            echo "Servidor: ".$this->servidor."\n";
//            echo "Usuário: ".$this->loginBanco."\n";
//            echo "Senha: ".$this->senhaBanco."\n";
//            echo "Database: ".$this->database."\n";
            
        }catch(Exception $ex){
            echo "Ocorreu um erro na conexão. Erro: ".$ex->getMessage();
        }
        
    }
    
}
