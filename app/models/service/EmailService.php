<?php

namespace app\models\service;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use stdClass;

class EmailService
{
    /** @var PHPMailer */
    private $mail;

    /** @var stdClass */
    private $data;

    /** @var Exception */
    private $error;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->data = new stdClass();

        $this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setLanguage("br");

        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = CONF_MAIL["MODO"];
        $this->mail->CharSet = "utf-8";

        $this->mail->Host = CONF_MAIL["HOST"];
        $this->mail->Port = CONF_MAIL["PORTA"];
        $this->mail->Username = CONF_MAIL["USUARIO"];
        $this->mail->Password = CONF_MAIL["SENHA"];
    }

    public function email(string $subject, string $body, string $recipient_name, string $recipient_email): EmailService
    {
        
        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email;
        return $this;
    }

    public function anexo(string $filePath, string $fileName): EmailService
    {
        
        $this->data->attach[$filePath] = $fileName;
        return $this;
    }

    public function send(string $from_name = CONF_MAIL["REMETENTE"], string $from_email = CONF_MAIL["EMAIL"]): bool
    {
        try {
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML($this->data->body);
            $this->mail->addAddress($this->data->recipient_email, $this->data->recipient_name);
            $this->mail->setFrom($from_email, $from_name);

            if (!empty($this->data->attach)) {
                foreach ($this->data->attach as $path => $name) {
                    $this->mail->addAttachment($path, $name);
                }
            }

            $this->mail->send();
            return true;
        } catch (Exception $exception) {
            $this->error = $exception;
            return false;
        }
    }

    public function error(): ?Exception
    {
        return $this->error;
    }
}
