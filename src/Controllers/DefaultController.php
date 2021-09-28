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


        if($request->getMethod() === 'POST') {

            $dataSubmitted = $request->getParsedBody();

                    $position_arobase = strpos($_POST['email'], '@');
                    if ($position_arobase === false){

                        echo '<p>Votre email doit comporter un arobase.</p>';
                    }

                    else {
                        $retour = mail('laurent.lesage51@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                        if($retour){
                            echo '<p>Votre message a été envoyé.</p>';
                        }else{ echo '<p>Erreur.</p>';  }    
                    }
                //}
                $errors = $this->errors;
                return $this->renderHtml('home.html.twig', ['errors'=>$errors]);
            }
 
            return $this->renderHtml('home.html.twig');
        }


  
    }