<?php


class classeStatus {
    
    
    
    
    
    public function consultaComboStatusUsuario(){
        try{
            $sql = $this->getStatusUsuario("0");
            $resultado = mysql_query($sql) or die ("Houve um erro no comando da consulta do status. Erro: ".mysql_error());

            if($resultado > 0){
                while($dados = mysql_fetch_array($resultado)){
                    echo "<option value='".$dados['idStatus']."'>".$dados['nome']."</option>";
                }
            }else{
                echo "<option value='0'>".COMBOERROR."</option>";
            }
        }catch (Exception $ex){
            echo ERROEXCEPTION.$ex->getMessage();
        }
        
        
    }
    
    public function getStatusUsuario($opcao){
        switch ($opcao){
            case null:
                return null;
                break;
            case 0:
                return "SELECT * FROM statususuario";
                break;
            
        
        }
        
    }   }
