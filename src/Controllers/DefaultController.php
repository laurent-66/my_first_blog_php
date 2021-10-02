<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Helpers\Mailer;

class DefaultController extends AbstractController
{

    protected $mailer;

    public function __construct()
    {
        $this-> mailer = new Mailer();
    }

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
   
                $error = 'le prénom est requis';

            } else if (strpos($dataSubmitted['email'], '@') === false){
                
                $error ='Votre email doit comporter un arobase.';

            } else {

                $sendMail = $this->mailer->send('Un test', 'lesageduweb@gmail.com' , 'john@doe.com', $this->renderHtml('mails/hello.html.twig', ['name' => 'Yolo']));
                
                // $sendMail = mail('laurent.lesage51@gmail.com', 'Envoi depuis la page Contact', $dataSubmitted['message'], 'From: ' . $dataSubmitted['email']);

                // $sendMail = mail('laurent.lesage51@gmail.com', 'Envoi depuis la page Contact', $dataSubmitted['message']);

                if($sendMail){

                    $validation = 'Votre message a été envoyé';

                } else { 
                    $error = 'erreur d\'envoi du message';
                }  

            }
        }

        return $this->renderHtml('home.html.twig', ['errors'=>$errorGlobal, 'error'=>$error, 'validation'=>$validation]);
    }

}