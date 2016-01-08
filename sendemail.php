<?php
require_once("./phpmailer/class.phpmailer.php");
        $nome = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $titulo = filter_input(INPUT_POST, 'titulo');
        $mensagem = filter_input(INPUT_POST, 'mensagem');

        $to = 'michel@mapti.com.br'; //seu e-mail

        $mail = new PHPMailer();
        
        $mail->SetLanguage("br");
        $mail->IsSMTP();
        $mail->IsHTML(true);
        $mail->SMTPAuth = "true";
        $mail->Username = "michel@mapti.com.br";
        $mail->Password = "m1ch3l4p";
        
        $mail->From = $to;  //email do remetente
        $mail->Sender = $to;  //email do remetente
        $mail->FromName = "MAP TI";   //Nome de formatado do remetente
        
        $mail->Host = "proteus.valueserver.com.br"; //Seu servidor SMTP
//        $mail->Mailer = "smtp";     //Usando protocolo SMTP
        $mail->Port = "465";
        
        $mail->AddAddress($to);     //O destino do email
        $mail->AddBCC($email);      //Envio com cópia oculta
        $mail->Subject = "MAP TI - ".$titulo; //Assunto do email

        $font = "arial";
        $tamanho = 2;
        $imagem = "http://www.mapti.com.br/img/logoMapti60x30.png";
        $mail->Body = "<br>"; //Body of the message
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "<font face=$font size='3'><b>MAP TI - " . $titulo . "</b></font>";
        $mail->Body .= "<br><hr>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Prezado Sr(a) " . $nome;
        $mail->Body .= "<br><br>";
        $mail->Body .= "Agradecemos pelo seu contato. Retornaremos o mais rápido possível. Segue abaixo os dados informados: ";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Nome</b>: " . $nome . "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>E-mail</b>: " . $email . "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Assunto</b>: " . $titulo . "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Mensagem</b>: <br/>" . $mensagem . "</font><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>MAP TI</font><br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.mapti.com.br' target='_blank' title='Acesse o site'><img src='http://www.mapti.com.br/img/logoMapti60x30.png' width='130' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <font color='#333333'><br>MAP TI</font><br><br>";
        $mail->Body .= "        <font size='$tamanho'>Telefones: (21) 3159-1391 / (21) 98243-1674</font><br>";
        $mail->Body .= "        <a href='http://www.mapti.com.br' target='_blank'><font size='2'>http://www.mapti.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:pereira.michel@gmail.com' target='_blank'><img src='http://www.mapti.com.br/img/email.png'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/pereira.michel1' target='_blank'><img src='http://www.mapti.com.br/img/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/pereiramichel' target='_blank'><img src='http://www.mapti.com.br/img/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';

        if(!$mail->Send()){ //Check for result of sending mail
            echo "Mensagem não enviada. Erro: ".$mail->ErrorInfo;
        }else{
            echo "Mensagem enviada com sucesso!";
        }


//die;