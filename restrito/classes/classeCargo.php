<?php

class classeCargo {
    //idCargo, nome, codigo
    
    
    
    
    public function consultaComboCargos(){
        try{
            $sql = $this->getCargos("0");
            $resultado = mysql_query($sql) or die ("Houve um erro no comando da consulta do cargo. Erro: ".mysql_error());

            if($resultado > 0){
                while($dados = mysql_fetch_array($resultado)){
                    echo "<option value='".$dados['idCargo']."'>".$dados['nome']."</option>";
                }
            }else{
                echo "<option value='0'>".COMBOERROR."</option>";
            }
        }catch (Exception $ex){
            echo "Não foi possível efetuar a busca de cargos. Erro: ".$ex->getMessage();
        }
        
        
    }
    
    public function getCargos($opcao){
        switch ($opcao){
            case null:
                return null;
                break;
            case 0:
                return "SELECT * FROM cargo";
                break;
            
        
        }
        
    }
    
}
