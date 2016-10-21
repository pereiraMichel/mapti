<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of xml
 *
 * @author Debug
 */
class xml {
    
//    public function geraXmlContratada($contratante){
    public function geraXmlContratada($contratante, $sede, $endereco, $bairro, $cidade, $estado, $cep, $cnpj, $inscricao, $diretor, $estadoCivil, $profissao, $identidade, $cpf, $enderecoDiretor, $bairroDiretor, $cidadeDiretor, $estadoDiretor, $cepDiretor){

        $dom = new DOMDocument("1.0", "ISO-8859-1");
        #retirar os espacos em branco
        $dom->preserveWhiteSpace = false;
        #gerar o codigo
        $dom->formatOutput = true;
        #criando o nó principal (root)
        $root = $dom->createElement("contrato");
        #nó filho (contato)
        $dados = $dom->createElement("dados");
        #setanto nomes e atributos dos elementos xml (nós)

        $contratante1 = $dom->createElement("contratante", $contratante);//, $contratante);
        $sede1 = $dom->createElement("sede", $sede);
        $endereco1 = $dom->createElement("endereco1", $endereco);
        $bairro1 = $dom->createElement("bairro1", $bairro);
        $cidade1 = $dom->createElement("cidade1", $cidade);
        $estado1 = $dom->createElement("estado1", $estado);
        $cep1 = $dom->createElement("cep1", $cep);
        $cnpj1 = $dom->createElement("cnpj", $cnpj);
        $inscr1 = $dom->createElement("inscricao", $inscricao);
        $diretor1 = $dom->createElement("diretor", $diretor);
        $estadoCivil1 = $dom->createElement("estadoCivil", $estadoCivil);
        $profissao1 = $dom->createElement("profissao", $profissao);
        $identidade1 = $dom->createElement("identidade", $identidade);
        $cpf1 = $dom->createElement("cpf", $cpf);
        $endereco2 = $dom->createElement("enderecoDiretor", $enderecoDiretor);
        $bairro2 = $dom->createElement("bairroDiretor", $bairroDiretor);
        $cidade2 = $dom->createElement("cidadeDiretor", $cidadeDiretor);
        $estado2 = $dom->createElement("estadoDiretor", $estadoDiretor);
        $cep2 = $dom->createElement("cepDiretor", $cepDiretor);

        #adiciona os nós (informacaoes do contato) em contato

        $dados->appendChild($contratante1);
        $dados->appendChild($sede1);
        $dados->appendChild($endereco1);
        $dados->appendChild($bairro1);
        $dados->appendChild($cidade1);
        $dados->appendChild($estado1);
        $dados->appendChild($cep1);
        $dados->appendChild($cnpj1);
        $dados->appendChild($inscr1);
        $dados->appendChild($diretor1);
        $dados->appendChild($estadoCivil1);
        $dados->appendChild($profissao1);
        $dados->appendChild($identidade1);
        $dados->appendChild($cpf1);
        $dados->appendChild($endereco2);
        $dados->appendChild($bairro2);
        $dados->appendChild($cidade2);
        $dados->appendChild($estado2);
        $dados->appendChild($cep2);

        #adiciona o nó contato em (root) agenda
        $root->appendChild($dados);
        $dom->appendChild($root);

        # Para salvar o arquivo, descomente a linha
        $dom->save("xml/contratada.xml");
        #cabeçalho da página
        header("Content-Type: text/xml");
        # imprime o xml na tela
//        print $dom->saveXML();
        
        header("Location: inicio.php?m=cs");

    }
    
    public function geraXmlTestemunhas($testemunha, $nome, $rg){

        
        $dom = new DOMDocument("1.0", "ISO-8859-1");
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        
        $root = $dom->createElement("testemunhas");
        $dados = $dom->createElement("dados");

        $nomeTestemunha = $dom->createElement("nome", $nome);
        $rgTestemunha = $dom->createElement("rg", $rg);//Elementos preenchidos
        
        $dados->appendChild($nomeTestemunha);
        $dados->appendChild($rgTestemunha);

        $root->appendChild($dados);
        $dom->appendChild($root);

        $dom->save("xml/".$testemunha.".xml");
        header("Content-Type: text/xml");
        
//        header("Location: inicio.php?m=cs&s=02");
    }
    public function geraXmlAceiteContrato($autoriza, $nome){

        
        $dom = new DOMDocument("1.0", "ISO-8859-1");
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        
        $root = $dom->createElement("aceite");
        $dados = $dom->createElement("termo");

        $nomeContratante = $dom->createElement("nome", $nome);
        $aceite = $dom->createElement("aceite", $autoriza);//Elementos preenchidos
        
        $dados->appendChild($nomeContratante);
        $dados->appendChild($aceite);

        $root->appendChild($dados);
        $dom->appendChild($root);

        $dom->save("xml/pelelisaContrato.xml");
        header("Content-Type: text/xml");
        
//        header("Location: inicio.php?m=cs&s=02");
    }
    
    public function leituraXml(){
//        $filename = "xml/contratada.xml";
//
//        @header("Content-Type: text/html; charset=utf-8");
//        $xml = simplexml_load_file($filename);
//
//        foreach($xml->texto as $texto)
//        {
//            echo $texto->galeria;
//            echo "<br>";
//        }                        
        
    }    
    
    public function leituraXmlUsuario($usuario, $senha){
        
        $arquivo = "usuario";
        
        $filename = "xml/".$arquivo.".xml";

        @header("Content-Type: text/html; charset=utf-8");
        $xml = simplexml_load_file($filename);

        foreach($xml->dados as $data)
        {
            $usuarioXml = $data->usuario;
            $senhaXml = $data->senha;
        }
        
        if($usuario == $usuarioXml){
            if($senha == $senhaXml){
                $_SESSION['autorizado'] = true;
                header("Location: inicio.php");
                echo "<br>Logado";
            }else{
                echo "<br><label style='color: #fff'><br><b>Senha inválida</b></label>";
            }
        }else{
            echo "<br><label style='color: #fff'><br><b>Login inválido</b></label>";
        }
        
    }

}
