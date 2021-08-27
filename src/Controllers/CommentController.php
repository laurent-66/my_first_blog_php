<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Http\ParametersBag;
use Application\Repository\CommentRepository;

class CommentController extends AbstractController
{
    private $CommentRepository;

    public function __construct()
    {
        $this->CommentRepository = new CommentRepository();
    }


    public function approveComment (ServerRequestInterface $request, ParametersBag $bag ){

        //Récupération de la valeur de l'id comment $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();
        $this->CommentRepository->approveComment($id);

        $idblog = (int) $bag->getParameter('blogId')->getValue();

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/'.$idblog);
        return $redirect->send();

    }


    public function deleteComment (ServerRequestInterface $request, ParametersBag $bag){
 
        //Récupération de la valeur de l'id comment $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();
        $this->CommentRepository->deleteComment($id);

        $idblog = (int) $bag->getParameter('blogId')->getValue();

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/'.$idblog);
        return $redirect->send();

    }

}