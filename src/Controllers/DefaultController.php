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
        $error = [] ;
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

                $this->$errorGlobal = 'Tout les champs sont requis';

            } else if ((strlen( trim($dataSubmitted['firstname']))) === 0) {
   
                $this->$error = 'le prénom est requis';

            } else if (strpos($dataSubmitted['email'], '@') === false){
                
                $this->$error ='Votre email doit comporter un arobase.';

            } else {

                $sendMail = $this->mailer->send($dataSubmitted['message'], 'lesageduweb@gmail.com' , $dataSubmitted['email'], $this->renderHtml('mails/hello.html.twig',  [

                'firstname' =>$dataSubmitted['firstname'],
                'name' => $dataSubmitted['name'],    
                'email' => $dataSubmitted['email'],    
                'phone' => $dataSubmitted['phone'],    
                'message' => $dataSubmitted['message'] 
                ]));
                
                if($sendMail){

                    $this->$validation = 'Votre message a été envoyé';

                } else { 
                    $this->$errorGlobal = 'erreur d\'envoi du message';
                }  

            }
        }

        return $this->renderHtml('home.html.twig');
    }

}