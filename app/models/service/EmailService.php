<?php

namespace app\models\service;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class EmailService
{
    public static function enviar($nome, $email, $assunto, $msg )
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                        //Send using SMTP
            $mail->Host       = CONF_MAIL["HOST"];                  //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               //Enable SMTP authentication
            $mail->Username   = CONF_MAIL["USUARIO"];               //SMTP username
            $mail->Password   = CONF_MAIL["SENHA"];                 //SMTP password
            $mail->SMTPSecure = CONF_MAIL["MODO"];                  //Enable implicit TLS encryption
            $mail->Port       = CONF_MAIL["PORTA"];                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom(CONF_MAIL["EMAIL"], CONF_MAIL["REMETENTE"]);
            $mail->addAddress($email, $nome);     //Add a recipient
            //$mail->addAddress('ti@quimicosunificados.com.br');               //Name is optional
            //$mail->addReplyTo('quimicos.backup@gmail.com', 'TI');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
        
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $assunto;
            $mail->Body    = $msg;
            $mail->AltBody = $msg;
            $mail->CharSet = "utf-8";
            $mail->send();
            return true;
        } catch (Exception $e) {
            //echo "Não foi possível enviar o e-mail. {$mail->ErrorInfo}<br><pre>". print_r($e);
            return false;
        }
    }
}
