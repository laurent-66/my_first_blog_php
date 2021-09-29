<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Templating\TwigTrait;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class DefaultController extends AbstractController
{

    public function getHomePage(ServerRequestInterface $request, ParametersBag $bag){
        $errorGlobal ='';
        $error = [
            "firstname" => "Le prénom est requis"

        ] ;

        $validation = '';
        $position_arobase = true ;

        if ($request->getMethod() === 'POST'){
            $dataSubmitted = $request->getParsedBody();

            if (
                (strlen( trim($dataSubmitted['firstname']))) === 0 ||
                (strlen( trim($dataSubmitted['name']))) === 0 ||
                (strlen(trim($dataSubmitted['email']))) === 0 ||
                (strlen(trim($dataSubmitted['phone']))) === 0 ||
                (strlen(trim($dataSubmitted['message']))) === 0
                ) 
            {

                $errorGlobal = 'Tout les champs sont requis';

            } else if ( (strlen( trim($dataSubmitted['firstname']))) === 0) {
   
                $error = $error['firstname'];

            }else if(strpos($dataSubmitted['email'], '@') === false){
                
                $errorarobase ='Votre email doit comporter un arobase.';

            } else {
                // ini_set('SMTP','localhost');
                // ini_set('smtp_port','25');

                //$sendMail = mail('laurent.lesage51@gmail.com', 'Envoi depuis la page Contact', $dataSubmitted['message'], 'From: ' . $dataSubmitted['email']);

                // $sendMail = mail('laurent.lesage51@gmail.com', 'Envoi depuis la page Contact', $dataSubmitted['message']);

                $this->phpMailer();

                // if($sendMail){

                //     $validation = 'Votre message a été envoyé';

                // } else { 
                //     $error = 'erreur d\'envoi du message';
                // }  

            }
        }

        return $this->renderHtml('home.html.twig', ['errors'=>$errorGlobal, 'error'=>$error, 'validation'=>$validation]);

    }


public function phpMailer(){

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('laurent.lesage51@gmail.com', 'Laurent Lesage');     //Add a recipient

    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }




}






}