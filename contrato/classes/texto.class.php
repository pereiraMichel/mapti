<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of texto
 *
 * @author Debug
 */
class texto {
    
    public function contratanteContratada(){
        echo "<div class='col-sm-12'>";
        echo "<h2 class='page-header'>Contratante/ Contratada</h2>";
        echo "<form name='formContrato' action='inicio.php?m=cs&s=01' method='post'>";
        echo "<table class='table'>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>CONTRATANTE: </b>";
        echo "      </td>";
        echo "      <td colspan='3'>";
        echo "          <input type='text' name='contratante' id='contratante' placeholder='Empresa' size='50' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>SEDE: </b>";
        echo "      </td>";
        echo "      <td colspan='3'>";
        echo "          <input type='text' name='sede' placeholder='Sede' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>ENDEREÇO COMPLETO: </b>";
        echo "      </td>";
        echo "      <td colspan='3'>";
        echo "          <input type='text' name='endereco' placeholder='Endereço' size='50' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>BAIRRO: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='bairro' placeholder='Bairro' required>";
        echo "      </td>";
        echo "      <td>";
        echo "          <b>CIDADE/ ESTADO: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='cidade' placeholder='Cidade' required>";
        echo "          <input type='text' name='estado' placeholder='Estado' size='3' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>CEP: </b>";
        echo "      </td>";
        echo "      <td colspan='3'>";
        echo "          <input type='text' name='cep' placeholder='CEP' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>C.N.P.J: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='cnpj' placeholder='CNPJ' required>";
        echo "      </td>";
        echo "      <td>";
        echo "          <b>INSCRIÇÃO ESTADUAL/ MUNICIPAL: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='inscricao' placeholder='Inscrição Estadual ou Municipal' size='30' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>DIRETOR: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='diretor' placeholder='Diretor' required>";
        echo "      </td>";
        echo "      <td>";
        echo "          <b>ESTADO CIVIL: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='estadocivil' placeholder='Estado Civil' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>PROFISSÃO: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='profissao' placeholder='Profissão' required>";
        echo "      </td>";
        echo "      <td>";
        echo "          <b>CARTEIRA DE IDENTIDADE: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='identidade' placeholder='Carteira de Identidade' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>CPF: </b>";
        echo "      </td>";
        echo "      <td colspan='3'>";
        echo "          <input type='text' name='cpf' placeholder='CPF' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>ENDEREÇO COMPLETO: </b>";
        echo "      </td>";
        echo "      <td colspan='3'>";
        echo "          <input type='text' name='enderecoDiretor' placeholder='Endereço Completo' size='50' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>BAIRRO: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='bairroDiretor' placeholder='Bairro' required>";
        echo "      </td>";
        echo "      <td>";
        echo "          <b>CIDADE/ ESTADO: </b>";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='cidadeDiretor' placeholder='Cidade' required>";
        echo "          <input type='text' name='estadoDiretor' placeholder='Estado' size='3' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          <b>CEP: </b>";
        echo "      </td>";
        echo "      <td colspan='3'>";
        echo "          <input type='text' name='cepDiretor' placeholder='CEP' required>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td colspan='4'>";
        echo "          &nbsp;";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td colspan='4' style='text-align: center;'>";
        echo "          <button type='submit' class='btn btn-primary'>Salvar</button>";
        echo "      </td>";
        echo "  </tr>";
        echo "</form>";
        echo "</table>";
        echo "<p style='height: 30px;'>&nbsp;</p>";
        echo "<p style='text-align: justify'><b>CONTRATADA: </b>MAP TI, com sede em Rio de Janeiro, na Rua dos Tintureiros, nº 213, bairro Bangu, Cep 21.820-170, no Estado Rio de Janeiro, inscrita no C.N.P.J. sob o nº 11.556.908/0001-00, e no Cadastro Municipal sob o nº 6.035.065-5, neste ato representada pelo seu diretor Michel Augusto Pereira, Brasileiro, Casado, Líder de Projetos, Carteira de Identidade nº 10521236-9, C.P.F. nº 023.407.667-45, residente e domiciliado na Rua (dos Tintureiros, nº 213, bairro Bangu, Cep 21.820-170, Cidade Rio de Janeiro, no Estado RJ.<br>";
        echo "As partes acima identificadas têm, entre si, justo e acertado o presente Contrato de Produção de Software entre Pessoas Jurídicas, que se regerá pelas cláusulas seguintes e pelas condições descritas no presente.<br><br></p>";
        echo "</p>";
        echo "</div>";
        
/* @var $_POST type */
        if($_POST){
            $contratante = $_POST['contratante'];
            $sede = addslashes($_POST['sede']);
            $endereco = addslashes($_POST['endereco']);
            $bairro = addslashes($_POST['bairro']);
            $cidade = addslashes($_POST['cidade']);
            $estado = addslashes($_POST['estado']);
            $cep = addslashes($_POST['cep']);
            $cnpj = addslashes($_POST['cnpj']);
            $inscricao = addslashes($_POST['inscricao']);
            $diretor = addslashes($_POST['diretor']);
            $estadoCivil = addslashes($_POST['estadocivil']);
            $profissao = addslashes($_POST['profissao']);
            $identidade = addslashes($_POST['identidade']);
            $cpf = addslashes($_POST['cpf']);
            $enderecoDiretor = addslashes($_POST['enderecoDiretor']);
            $bairroDiretor = addslashes($_POST['bairroDiretor']);
            $cidadeDiretor = addslashes($_POST['cidadeDiretor']);
            $estadoDiretor = addslashes($_POST['estadoDiretor']);
            $cepDiretor = addslashes($_POST['cepDiretor']);
//            
            $xml = new xml();
//            
//            $xml->geraXmlContratada($contratante);
            $xml->geraXmlContratada($contratante, $sede, $endereco, $bairro, $cidade, $estado, $cep, $cnpj, $inscricao, $diretor, $estadoCivil, $profissao, $identidade, $cpf, $enderecoDiretor, $bairroDiretor, $cidadeDiretor, $estadoDiretor, $cepDiretor);
        }
        
    }

    public function testemunhas() {
        
        
        echo "<h2 class='page-header'>Testemunhas</h2>";
        echo "<div class='col-sm-12'>";
        echo "<form name='formTest' method='post' action='inicio.php?m=cs'>";
        echo "<table class='table'>";
        echo "  <tr>";
        echo "      <td colspan='2'>";
        echo "          Testemunha 1:";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          Nome:";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='testemunha1'>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          RG:";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='rgTestemunha1'>";
        if(file_exists("xml/testemunha1.xml")){
            echo "&nbsp;&nbsp;&nbsp;<b>Preenchido</b>";
        }
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td colspan='2'>";
        echo "          <button type='submit' class='btn btn-primary'>Salvar</button>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td colspan='2'>";
        echo "          &nbsp;";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td colspan='2'>";
        echo "          Testemunha 2:";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          Nome:";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='testemunha2'>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>";
        echo "          RG:";
        echo "      </td>";
        echo "      <td>";
        echo "          <input type='text' name='rgTestemunha2'>";
        if(file_exists("xml/testemunha2.xml")){
            echo "&nbsp;&nbsp;&nbsp<b>Preenchido</b>";
        }
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td colspan='2'>";
        echo "          <button type='submit' class='btn btn-primary'>Salvar</button>";
        echo "      </td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td colspan='2'>";
        echo "          &nbsp;";
        echo "      </td>";
        echo "  </tr>";
        echo "</table>";
        echo "</div>";
        
        if($_POST){
            
            $testemunha1 = addslashes(filter_input(INPUT_POST, 'testemunha1'));
            $rgTestemunha1 = addslashes(filter_input(INPUT_POST, 'rgTestemunha1'));
            $testemunha2 = addslashes(filter_input (INPUT_POST, 'testemunha2'));
            $rgTestemunha2 = addslashes(filter_input (INPUT_POST, 'rgTestemunha2'));
            
                $xml = new xml();
            
            if(!empty($testemunha1)){
                $arquivo = "testemunha1";
                $xml->geraXmlTestemunhas($arquivo, $testemunha1, $rgTestemunha1);
                
            }else if(!empty($testemunha2)){
                $arquivo = "testemunha2";
//                echo "Chamando Testemunha2";
                $xml->geraXmlTestemunhas($arquivo, $testemunha2, $rgTestemunha2);
            }
            
            
        }
        
    }
    
    public function validaVariavel($variavel){
        if (strlen($variavel) > 0){
            return $variavel;
        }else{
            $variavelError = "<b><em>Não preenchido</em></b>";
            return $variavelError;
        }
    }
    
    public function contratoPJNew(){
        echo "<div class='col-sm-12'>";
        echo "<h2 class='page-header'>Contrato de Prestação de Serviços</h2>";
        echo "<form name='formContrato' action='inicio.php?m=cs&s=03' method='post'>";
        echo "<p style='font-size: 16px; text-align: center'><b>IDENTIFICAÇÃO DAS PARTES CONTRATANTES</b><br><br></p>";
        $filename = "xml/contratada.xml";

        @header("Content-Type: text/html; charset=utf-8");
        $xml = simplexml_load_file($filename);

        foreach($xml->dados as $texto)
        {
            $contratante = $texto->contratante;
            $sede = $texto->sede;
            $endereco = $texto->endereco1;
            $bairro = $texto->bairro1;
            $cep = $texto->cep1;
            $estado = $texto->estado1;
            $cnpj = $texto->cnpj;
            $inscricao = $texto->inscricao;
            $diretor = $texto->diretor;
            $estadoCivil = $texto->estadoCivil;
            $profissao = $texto->profissao;
            $identidade = $texto->identidade;
            $cpf = $texto->cpf;
            $enderecoDiretor = $texto->enderecoDiretor;
            $bairroDiretor = $texto->bairroDiretor;
            $cepDiretor = $texto->cepDiretor;
            $cidadeDiretor = $texto->cidadeDiretor;
            $estadoDiretor = $texto->estadoDiretor;
        }
        echo "<p style='text-align: justify'><b>CONTRATANTE:</b> ".$this->validaVariavel($contratante).", com sede em ".$this->validaVariavel($sede).", sob o endereço ".$this->validaVariavel($endereco).", Bairro ".$this->validaVariavel($bairro).", Cep ".$this->validaVariavel($cep).", no Estado ".$this->validaVariavel($estado).", inscrita no C.N.P.J. sob o nº ".$this->validaVariavel($cnpj).", e no Cadastro Estadual/ Municipal sob o nº ".$this->validaVariavel($inscricao).", neste ato representada pelo seu diretor ".$this->validaVariavel($diretor).", Brasileiro(a), ".$this->validaVariavel($estadoCivil).", Profissão ".$this->validaVariavel($profissao).", Carteira de Identidade nº ".$this->validaVariavel($identidade).", CPF nº ".$this->validaVariavel($cpf).", residente e domiciliado na ".$this->validaVariavel($enderecoDiretor).", bairro ".$this->validaVariavel($bairroDiretor).", Cep ".$this->validaVariavel($cepDiretor).", Cidade ".$this->validaVariavel($cidadeDiretor).", no Estado ".$this->validaVariavel($estadoDiretor).".</p><br><br>";
//        }                        
        
        echo "<p style='text-align: justify'><b>CONTRATADA:</b> MAP TI, com sede em Rio de Janeiro, na Rua dos Tintureiros, nº 213, bairro Bangu, Cep 21.820-170, no Estado Rio de Janeiro, inscrita no C.N.P.J. sob o nº 11.556.908/0001-00, e no Cadastro Municipal sob o nº 6.035.065-5, neste ato representada pelo seu diretor Michel Augusto Pereira, Brasileiro, Casado, Líder de Projetos, Carteira de Identidade nº 10521236-9, C.P.F. nº 023.407.667-45, residente e domiciliado na Rua dos Tintureiros, nº 213, bairro Bangu, Cep 21.820-170, Cidade Rio de Janeiro, no Estado RJ.</p><br>";
        echo "<p style='text-align: justify'>As partes acima identificadas têm, entre si, justo e acertado o presente Contrato de Produção de Software entre Pessoas Jurídicas, que se regerá pelas cláusulas seguintes e pelas condições descritas no presente.</p><br><br>";
        echo "<section id='objetoContrato' style='text-align: justify;'>";
        echo "<b>DO OBJETO DO CONTRATO</b><br><br>"; 
        echo "<b>Cláusula 1ª.</b> O presente contrato tem como <b>OBJETO</b>, a construção, pela <b>CONTRATADA</b>, de software, com a seguinte descrição técnica:<br>"; 
        echo "a) O software deverá seguir o projeto em anexo, feito pela <b>CONTRATADA</b>, seguindo as instruções dadas pela <b>CONTRATANTE</b>.<br>"; 
        echo "b) A linguagem de programação será <b>PHP</b>, com o banco de dados <b>MySQL</b>.<br>";
        echo "c) O software exigirá como configuração mínima de hardware <b>1GB de memória RAM e sem limites de armazenamento, pois será via web e como sistema operacional Windows, Linux, Android ou iOS</b>.<br>";
        echo "d) Para o funcionamento do mesmo, será necessário ter o navegador web de sua preferência, que sejam <b>Internet Explorer, Mozilla Firefox, Google Chrome ou Safari</b>. Lembrando que o sistema estará de forma responsiva, para que haja visualização nos celulares.<br><br>";
        echo "</section>";
        echo "<section id='execucao' style='text-align: justify;'>";
        echo "<b>DA EXECUÇÃO</b><br><br>";
        echo "<b>Cláusula 2ª.</b> A <b>CONTRATANTE</b> se obriga a acompanhar a execução do software web no endereço <b>pelelisa.mapti.com.br</b>, fazendo os testes que a <b>CONTRATADA</b> exigir durante a execução do trabalho, sob pena de este paralisar seus trabalhos até que os testes pedidos sejam feitos.<br>";
        echo "<b>Parágrafo único.</b> Caso o resultado dos testes seja aprovado pela <b>CONTRATATANTE</b>, a <b>CONTRATADA</b> prosseguirá a produção, sendo vedado à primeira requerer modificações naquilo já aprovado, a menos que haja combinação em contrário entre as partes.<br>";
        echo "<b>Cláusula 3ª.</b> No serviço estabelecido neste contrato, a <b>CONTRATADA</b> somente fornecerá a mão-de-obra necessária, responsabilizando-se a <b>CONTRATANTE</b> pelo fornecimento de todos os dados para a confecção do software, de acordo com a solicitação da <b>CONTRATADA</b>.<br>";
        echo "<b>Cláusula 4ª.</b> A construção do software será feita exclusivamente pela <b>CONTRATADA</b>, facultando-lhe a contratação de terceirização, que terá vínculos únicos e diretos com a mesma, que ficará exclusivamente responsável pelo pagamento e por todos os encargos existentes.<br>";
        echo "<b>Cláusula 5ª.</b> Quaisquer danos causados a terceiros e provenientes da execução do trabalho, agindo dolosa ou culposamente, serão de inteira responsabilidade da <b>CONTRATADA</b>, independente de quem desta empresa os tenha feito.<br>";
        echo "<b>Cláusula 6ª.</b> A <b>CONTRATADA</b> terá completa e irrestrita liberdade para executar seu trabalho, restringindo seu vínculo com a <b>CONTRATANTE</b> apenas à execução deste contrato.<br><br>";
        echo "</section>";
        echo "<section id='protecao' style='text-align: justify;'>";
        echo "<b>DA PROTEÇÃO DO SOFTWARE</b><br><br>"; 
        echo "<b>Cláusula 7ª.</b> Fica vedado à <b>CONTRATANTE</b> a reprodução do software, ou mesmo o consentimento para que outro o faça, sem prévia autorização da <b>CONTRATADA</b>.<br>";
        echo "<b>Cláusula 8ª.</b> A <b>CONTRATADA</b> não se responsabiliza pelo funcionamento do software caso o código fonte do programa seja adulterado por terceiros não autorizados. Quaisquer alterações desejadas pela <b>CONTRATANTE</b> deverão ser requisitadas diretamente à <b>CONTRATADA</b>.<br><br>"; 
        echo "</section>";
        echo "<section id='pagamento' style='text-align: justify;'>";
        echo "<b>DO PAGAMENTO</b><br><br>";
        echo "<b>Cláusula 9ª.</b> Pelo serviço prestado, a <b>CONTRATANTE</b> pagará à <b>CONTRATADA</b> a quantia de <b>R$ 5.000,00 (Cinco mil reais), parceladas em 5x, em todo dia 15 de cada mês</b>; o pagamento que será efetivado na sede da <b>CONTRATADA</b>, ou por depósito/ transferência bancária, no banco Banco do Brasil, Agência 1508-3, Conta Corrente 32.204-0, do titular Michel Augusto Pereira.<br>

<b>Cláusula 10ª.</b> Caso o valor acertado na Cláusula anterior não seja pago no período previsto, a <b>CONTRATANTE</b> se responsabilizará por multa de 2% do valor total do software web.<br><br>";
        echo "</section>";
        echo "<section id='rescisao' style='text-align: justify;'>";
        echo "<b>DA RESCISÃO</b><br><br>"; 
        echo "<b>Cláusula 11ª.</b> O presente instrumento poderá ser rescindido caso qualquer uma das partes descumpra o disposto neste contrato.<br> 

<b>Parágrafo primeiro.</b> Caso a <b>CONTRATANTE</b> dê motivo à rescisão do contrato, será obrigado a pagar à <b>CONTRATADA</b> por inteiro a retribuição compactuada. <br>

<b>Parágrafo segundo.</b> Caso a <b>CONTRATADA</b> dê motivo à rescisão do contrato, terá direito à retribuição proporcional ao que tiver realizado até então, mas responderá por perdas e danos. <br>

<b>Cláusula 12ª.</b> Na hipótese de a <b>CONTRATADA</b> pedir a rescisão do contrato sem que a outra parte tenha dado motivo, terá direito à retribuição proporcional ao que tiver realizado até então, mas responderá por perdas e danos.<br> 

<b>Cláusula 13ª.</b> Na hipótese de a <b>CONTRATANTE</b> pedir a rescisão do contrato sem que a outra parte tenha dado motivo, será obrigado a pagar à <b>CONTRATADA</b> por inteiro a retribuição compactuada.<br><br>";
        echo "</section>";
        echo "<section id='prazo' style='text-align: justify;'>";
        echo "<b>DO PRAZO</b><br><br>"; 
        echo "<b>Cláusula 14ª.</b> A <b>CONTRATADA</b> se compromete a executar o software em 3 meses, a iniciar-se no primeiro dia útil após a entrega pela <b>CONTRATANTE</b> de todo o material e dados necessários à confecção. <br>

<b>Parágrafo único.</b> O prazo será suspenso caso a <b>CONTRATANTE</b> descumpra o disposto na <b>Cláusula 2ª</b>. <br>

<b>Cláusula 15ª.</b> Quaisquer problemas que possam ocasionar interrupções das atividades de confecção do software acarretarão a suspensão do prazo contido na Cláusula anterior, devendo a <b>CONTRATADA</b> avisar previamente à <b>CONTRATANTE</b>. <br>

<b>Cláusula 16ª.</b> A <b>CONTRATANTE</b> terá um prazo de 10 dias para testar o software depois de pronto e sugerir outras alterações em partes do programa que ainda não foram autorizados nos moldes da <b>Clausulas 2º</b>.<br><br>";
        echo "</section>";
        echo "<section id='foro'>";
        echo "<b>DO FORO</b><br><br>"; 
        echo "<b>Cláusula 17ª.</b> Para dirimir quaisquer controvérsias oriundas do <b>CONTRATO</b>, as partes elegem o foro da <b>comarca de Rio de Janeiro</b>;<br>";
        echo "Por estarem assim justos e contratados, firmam o presente instrumento, em duas vias de igual teor, juntamente com 2 (duas) testemunhas.<br><br>"; 
        echo "</section>";
        echo "<section id='testemunhas' style='text-align: justify;'>";
        echo "<p style='text-align: right;'>Rio de Janeiro, 24 de setembro de 2016.</p><br><br>"; 
        echo "<div style='text-align: center;'><input type='checkbox' name='aceite'> Aceito os termos deste contato</div><br><br>"; 
        echo "<div style='text-align: center;'><button type='submit' class='btn btn-primary'>Salvar</button></div><br>";
        echo "<p style='text-align: justify'>";
        echo "<h5>Testemunhas:</h5><br>";
        
        $filename = "xml/testemunha1.xml";
        
        if(!file_exists($filename)){
            echo "<b><em>Não preenchido</em></b>";
        }else{
        
            @header("Content-Type: text/html; charset=utf-8");
            $xml = simplexml_load_file($filename);

            foreach($xml->dados as $testemunha1)
            {
                $nome1 = $testemunha1->nome;
                $rg1 = $testemunha1->rg;
            }
            echo "<b>".$this->validaVariavel($nome1)."</b><br>";
            echo "RG: ".$this->validaVariavel($rg1)."<br><br>";
        
        }
        $filename2 = "xml/testemunha2.xml";

        if(!file_exists($filename2)){
            echo "<br><br><b><em>Não preenchido</em></b>";
        }else{
        @header("Content-Type: text/html; charset=utf-8");
        $xml2 = simplexml_load_file($filename2);

        foreach($xml2->dados as $testemunha2)
        {
            $nome2 = $testemunha2->nome;
            $rg2 = $testemunha2->rg;
        }
        echo "<b>".$this->validaVariavel($nome2)."</b><br>";
        echo "RG: ".$this->validaVariavel($rg2)."<br><br>";

        }
        
        echo "</section>";
        
        echo "</form>";
        echo "</div>";
        
        if($_POST['aceite']){
            $xml_config = new xml();
            $aceite = addslashes($_POST['nome']);
            $xml_config->geraXmlAceiteContrato("true", "PeleLisa");
            header("Location: inicio.php?m=cs");
        }
        
    }
    //put your code here
}
