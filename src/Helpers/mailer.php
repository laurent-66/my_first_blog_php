<?php

namespace Application\Helpers;
use Exception;

class Mailer
{
    protected $mailerSrv;

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        //define configuration mail with login and password for smtp
        $config = require_once(__DIR__.'../../../config/mail/mail_config.php');

        //create the transport provider smtp, host and encrypt certificat in ssl

        $transport = ( new \Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))

        ->setUsername($config['email'])
        ->setPassword($config['password']);

        // Create the Mailer using the created Transport
        $this->mailerSrv = new \Swift_Mailer($transport);

    }


    public function send(string $subject, string $to, string $from, string $body)
    {

        try{
            $message = (new \Swift_Message())
            ->setTo($to)
            ->SetFrom($from)
            ->setSubject($subject)
            ->setBody($body)
            ->setContentType('text/html');

            $result =$this->mailerSrv->send($message);
            dump($result);

        } catch( Exception $e) {
            dump($e);
        }

    }
    
}