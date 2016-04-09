<?php


class classeTipoAcesso {

    //idTipoAcesso, tipoAcesso, codTipoAcesso
    
    public function consultaComboTipoAcesso(){
        
        try{
            $sql = $this->getTipoAcesso("0");
            $resultado = mysql_query($sql) or die ("Problemas no comando para consulta do tipo de acesso. Erro: ".mysql_error());
            if($resultado > 0){
                while($dados = mysql_fetch_array($resultado)){
                    echo "<option value='".$dados['idTipoAcesso']."'>".$dados['tipoAcesso']."</option>";
                }
            }else{
                echo "<option value='0'>".COMBOERROR."</option>";
            }
            
        } catch (Exception $ex) {
            echo ERROEXCEPTION.$ex->getMessage();
        }
        
    }
    
    public function getTipoAcesso($opcao){
        switch ($opcao){
            case null:
                return null;
                break;
            case 0:
                return "SELECT * FROM tipoacesso";
                break;
        }
    }
    
}
