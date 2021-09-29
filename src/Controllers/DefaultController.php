<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Templating\TwigTrait;


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
                ini_set('smtp_port','26');

                $sendMail = mail('laurent.lesage51@gmail.com', 'Envoi depuis la page Contact', $dataSubmitted['message'], 'From: ' . $dataSubmitted['email']);
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