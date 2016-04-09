<?php


class classeDepartamento {
    //idDepartamento, nome, codCliente
    
    private $idDepartamento;
    private $nome;
    private $codCliente;
    
    function getIdDepartamento() {
        return $this->idDepartamento;
    }

    function getNome() {
        return $this->nome;
    }

    function getCodCliente() {
        return $this->codCliente;
    }

    function setIdDepartamento($idDepartamento) {
        $this->idDepartamento = $idDepartamento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    public function consultaComboDepartamento(){
        try{
            $sql = $this->getDepartamento("0");
            $resultado = mysql_query($sql) or die ("Houve um erro no comando da consulta do cargo. Erro: ".mysql_error());

            if($resultado > 0){
                while($dados = mysql_fetch_array($resultado)){
                    echo "<option value='".$dados['idCliente']."'>".$dados['nome']."</option>";
                }
            }else{
                echo "<option value='0'>".COMBOERROR."</option>";
            }
        }catch (Exception $ex){
            echo "Não foi possível efetuar a busca de cargos. Erro: ".$ex->getMessage();
        }
    }
    
    public function getDepartamento($opcao){
        switch ($opcao){
            case null:
                return null;
                break;
            case 0:
                return "SELECT * FROM cliente";
                break;
        }
        
    }
}
