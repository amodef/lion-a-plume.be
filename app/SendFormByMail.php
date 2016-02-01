<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

use PHPMailer;
use ReCaptcha\ReCaptcha;

class SendFormByMail
{
    /**
     * reCaptcha private key.
     * 
     * @var string
     */
    protected $secret = '6LfXyQwTAAAAANcrHgV7PmzAJJMlNgHjrsNcGU-s';

    public $name;
    public $email;
    public $message;
    public $phone;
    public $recaptcha_response;

    public $error_message = null;

    public function __construct($query)
    {
        $this->setName($query['full_name']);
        $this->setEmail($query['email']);
        $this->setMessage($query['message']);
        $this->setPhoneNumber($query['tel']);
        $this->setRecaptchaResponse($query['g-recaptcha-response']);
    }

    protected function setName($q_name)
    {
        if (empty($q_name)){
            throw new Exception('Please, give us your name.');
        }
        $this->name = trim($q_name);
    }

    protected function setEmail($q_mail)
    {
        if (!filter_var($q_mail, FILTER_VALIDATE_EMAIL)) {
            $this->error_message = _('We need a valid email address.');
            return null;
        }
        $this->email = trim($q_mail);
    }

    protected function setMessage($q_message)
    {
        if ($q_message == ''){
            $this->error_message = _('You forgot your message!');
            return null;
        }
        $this->message = trim($q_message);
    }

    protected function setPhoneNumber($q_phone)
    {
        if ($q_phone != ''){
            $this->phone = trim($q_phone);            
        }  
    }

    protected function setRecaptchaResponse($q_recaptcha)
    {
        if ($q_recaptcha == '') {
            $this->error_message = _('No reCaptcha key given.');
            return null;
        }
        $this->recaptcha_response = trim($q_recaptcha);
    }

    public function validateRecaptcha()
    {
        $remote_ip = $_SERVER['REMOTE_ADDR'];
        
        // create new reCaptcha object
        $recaptcha = new ReCaptcha($this->secret);
        
        // verify the reCaptcha
        $resp = $recaptcha->verify($this->recaptcha_response, $remote_ip);
        
        if (!$resp->isSuccess()) {
            $this->error_message = _('Are you human?');
            var_dump($this->error_message);
            return null;
        }        
        return $this;
    }

    public function sendMail()
    {
        $mail = new PHPMailer();

        $body = "
            <!doctype html>
            <html>
            <head>
                <meta charset=\"utf-8\">
            </head>
            <body>";
        $body .= "<b>Name :</b> " . $this->name . "<br>";
        $body .= "<b>Email :</b> " . $this->email . "<br>";
        if (isset($this->phone)){
            $body .= "<b>Tel. : </b>" . $this->phone . "<br>";
        }
        $body .= "<p style=\"padding-top: 15px;\">" . $this->message . "</p></body></html>";

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "ssl0.ovh.net";
        $mail->Port = 465;
        $mail->Username = "info@lion-a-plume.be";
        $mail->Password = "M3rc@t0r";

        $mail->SetFrom($this->email,$this->name);
        $mail->AddAddress("info@lion-a-plume.be", "Brasserie du Lion à Plume");
        $mail->Subject    = "Message de " . $this->name . " en provenance du site web";
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML($body);

        if ($mail->Send()) {            
            header("Location: /" . $_GET['locale'] . "/thanks/#conta");
            exit;
        } else {
            $this->error_message = sprintf(_('There was a problem sending the email: %s'), $mail->ErrorInfo);
        }
    }
}
