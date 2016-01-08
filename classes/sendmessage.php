<?php

/**
 * Description of sendmessage
 *
 * @author Michel Pereira
 */
class sendmessage {
    
    private $nome;
    private $email;
    private $titulo;
    private $mensagem;
    private $protocolo;
    
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }
    
    function setProtocolo($protocolo){
        $this->protocolo = $protocolo;
    }
    
    function getProtocolo(){
        return $this->protocolo;
    }
    
    public function geraProtocolo(){
        date_default_timezone_set('UTC');
        date_default_timezone_set('America/Sao_Paulo');
        
        $ano = date('Y');
        $mes = date('m');
        $dia = date('d');
        $hora = date('H');
        $min = date('i');
        $codMap = "015";
        
        $protocolo = $ano.$mes.$dia.$codMap.$hora.$min;
        
        $this->protocolo = $protocolo;
        
    }

    public function enviaMensagem(){
        
        $this->geraProtocolo();
        
        $to = 'michel@mapti.com.br'; //seu e-mail
        $mail = new PHPMailer();
        $mail->SetLanguage("br");
        $mail->IsSMTP();
        $mail->IsHTML(true);

        $mail->From = $to;  //email do remetente
        $mail->Sender = $to;  //email do remetente
        $mail->FromName = "MAP TI";   //Nome de formatado do remetente

        $mail->Host = "mail.mapti.com.br"; //Seu servidor SMTP
//        $mail->Host = "proteus.valueserver.com.br"; //Seu servidor SMTP
        $mail->Mailer = "smtp";     //Usando protocolo SMTP
//        $mail->Port = "465";
        $mail->Port = "587";
        $mail->AddAddress($to);     //O destino do email
        $mail->AddBCC($this->email);      //Envio com cópia oculta
        $mail->Subject = "MAP TI - " . $this->titulo; //Assunto do email

        $font = "arial";
        $tamanho = 2;
        $tamanhoSub = 1;
        $mail->Body = "<br>"; //Body of the message
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "<font face=$font size='3'><b>MAP TI - " . $this->titulo . "</b></font>";
        $mail->Body .= "<br/><hr>";
        $mail->Body .= "<div align='right'><font face='$font' size='".$tamanhoSub."'>Protocolo: ".$this->protocolo."</font></div>";
        $mail->Body .= "<br/><br/>";
        $mail->Body .= "Prezado Sr(a) " . $this->nome.", ";
        $mail->Body .= "<br/><br/>";
        $mail->Body .= "Agradecemos pelo seu contato. Retornaremos o mais rápido possível. Segue abaixo os dados informados: ";
        $mail->Body .= "<br/><br/>";
        $mail->Body .= "<br/><font face=$font size='$tamanho'><b>Nome</b>: " . $this->nome . "</font><br>";
        $mail->Body .= "<br/><font face=$font size='$tamanho'><b>E-mail</b>: " . $this->email . "</font><br>";
        $mail->Body .= "<br/><font face=$font size='$tamanho'><b>Mensagem</b>: <br/><br/>" . $this->mensagem . "</font><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.mapti.com.br' target='_blank' title='Acesse o site'><img src='http://www.mapti.com.br/images/logoMapTi200x100.png' width='180' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "<font face=$font size='$tamanho'>Michel Pereira</font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'>Analista/ Desenvolvedor de Sistemas (MAP TI - PJ)</font><br><br>";
        $mail->Body .= "        <a href='https://br.linkedin.com/in/pereiramichel' target='_blank'><img src='http://www.mapti.com.br/images/linkedin.jpg'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/pereira.michel1' target='_blank'><img src='http://www.mapti.com.br/images/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/pereiramichel' target='_blank'><img src='http://www.mapti.com.br/images/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>";
        $mail->Body .= "        <br><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <img src='http://www.mapti.com.br/images/ico_telefone.png'><font size='$tamanhoSub'> (21) 3591-1534<br/>";
        $mail->Body .= "        <img src='http://www.mapti.com.br/images/whatsapp-icon.png'><font size='$tamanhoSub'> (21) 98243-1674</font><br>";
        $mail->Body .= "        <img src='http://www.mapti.com.br/images/blackWorld.png'><a href='http://www.mapti.com.br' target='_blank'><font size='1'> http://www.mapti.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';

        $mail->SMTPAuth = "true";
        $mail->Username = "michel@mapti.com.br";
        $mail->Password = "m1ch3l4p";
        if (!$mail->Send()) {
            echo "<script>document.getElementById('mensagem').style.display='none'</script>";
            echo "<script>document.getElementById('sucesso').style.display='none'</script>";
            echo "<script>document.getElementById('erro').style.display='block'</script>";
//            echo "<script>document.getElementById('mensagemErro').value='Mensagem não enviada. Erro: " . $mail->ErrorInfo . "'</script>";
        } else {
            echo "<script>document.getElementById('mensagem').style.display='none'</script>";
            echo "<script>document.getElementById('erro').style.display='none'</script>";
            echo "<script>document.getElementById('sucesso').style.display='block'</script>";
            echo "<meta http-equiv='refresh' content='5;url=http://www.mapti.com.br/'>";
            
        }

        $mail->ClearAllRecipients();
        
        die;
        
        
        
    }
    
    
}
