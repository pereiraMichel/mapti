<?php


class conexao {

    private $loginBanco;
    private $senhaBanco;
    private $servidor;
    private $porta;
    private $database;
    public static $instance;
    public static $conecta;
    
//    private function __construct() {
//        //;
//    }
    
    public function setLoginBanco($login){
        $this->loginBanco = $login;
    }
    public function getLoginBanco(){
        return $this->loginBanco;
    }

    public function setSenhaBanco($senha){
        $this->senhaBanco = $senha;
    }
    public function getSenhaBanco(){
        return $this->senhaBanco;
    }

    public function setServidorBanco($servidor){
        $this->servidor = $servidor;
    }
    public function getServidorBanco(){
        return $this->servidor;
    }

    public function setPortaBanco($porta){
        $this->porta = $porta;
    }
    public function getPortaBanco(){
        return $this->porta;
    }

    public function setDatabase($database){
        $this->database = $database;
    }
    public function getDatabase(){
        return $this->database;
    }
    
    public function getConnectionLocal(){
        
        try{
            $ini = parse_ini_file("config.ini", TRUE);

            $this->setLoginBanco(base64_decode($ini['local']['usuario']));
            $this->setSenhaBanco(base64_decode($ini['local']['senha']));
            $this->setServidorBanco(base64_decode($ini['local']['server']));
            $this->setPortaBanco(base64_decode($ini['local']['porta']));
            $this->setDatabase(base64_decode($ini['local']['database']));
            
//            if(!isset(self::$instance)){
//                self::$instance = new PDO('mysql:host=$this->servidor;dbname=$this->database', $this->loginBanco, $this->senhaBanco, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
//                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
//            }

            $conecta = mysql_connect($this->servidor, $this->loginBanco, $this->senhaBanco) or die("Erro ao conectar o banco de dados. Especificação técnica: ".  mysql_connect_error());

            mysql_select_db($this->database, $conecta);
            mysql_set_charset('utf8', $conecta);
            
//            $mysql = new mysqli($this->servidor, $this->loginBanco, $this->senhaBanco, $this->database, $this->porta);

//            echo "Servidor: ".$this->servidor."\n";
//            echo "Usuário: ".$this->loginBanco."\n";
//            echo "Senha: ".$this->senhaBanco."\n";
//            echo "Database: ".$this->database."\n";
            return $conecta;
//            return self::$conecta;
//            return self::$instance;
            
        }catch(Exception $ex){
            echo "Ocorreu um erro na conexão. Erro: ".$ex->getMessage();
        }
        
    }
    
}
