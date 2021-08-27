<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Application\Repository\BlogRepository;
use Application\Exceptions\NotFoundException;

use Application\Repository\CommentRepository;


class AdminController extends AbstractController
{

    protected $blogRepository= '';

    public function __construct()
    {
        $this->blogRepository = new BlogRepository;

        $this->commentRepository = new CommentRepository;

    }

    public function createBlog (ServerRequestInterface $request, ParametersBag $bag){
        
        if($request->getMethod() === 'POST') {

            //récupération de données du post dans un tableau
            $dataArray = $request->getParsedBody();
            //création du blog

            $this->blogRepository->createBlog($dataArray);
            //die('test1');
            //redirection sur la page courante (get)
            $redirect = new RedirectResponseHttp('/blogs');
            return $redirect->send();
        }
        return $this->renderHtml('newBlog.html.twig');
    }

    public function updateBlog (ServerRequestInterface $request, ParametersBag $bag){

        //Récupération de la valeur de l'id blog $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();
        //récupération du blog présent pour préremplir les champs
        $blog = $this->blogRepository->findByBlogId($id);

        //vérification du type de requête si http null, POST ou GET(par defaut)

        if(is_null($blog)){
            //TODO Except exeception Not found
            throw new NotFoundException('le blog n\'existe pas');
        }

        if($request->getMethod() === 'POST') {
            //récupération de données du post dans un tableau
            $dataArray = $request->getParsedBody();
            //maj du blog
            $this->blogRepository->updateBlog($dataArray,$id);
            //redirection sur la page courante (get)
            $redirect = new RedirectResponseHttp($request->getUri()->getPath());
            return $redirect->send();
    
        }
        //page formulaire préremplie (get)
        return $this->renderHtml('updateBlog.html.twig',['blog'=>$blog]);
    }

    public function deleteBlog (ServerRequestInterface $request, ParametersBag $bag){

        //Récupération de la valeur de l'id blog $id du $bag
        // $id = '';
        $id = (int) $bag->getParameter('id')->getValue();
        $this->blogRepository->deleteBlog($id);
        // return $this->renderHtml('blogs-list.html.twig');

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs');
        return $redirect->send();

    }

    public function deleteCommentMember (ServerRequestInterface $request, ParametersBag $bag){
        $id = (int) $bag->getParameter('id')->getValue();
        $this->blogRepository->deleteBlog($id);
        return $this->renderHtml('blogs-list.html.twig');
    }


    public function dashboard (ServerRequestInterface $request, ParametersBag $bag){

        if(!array_key_exists('user',$_SESSION) || $_SESSION['user']['admin'] != "1"){

            $redirect = new RedirectResponseHttp('/');
            return $redirect->send();
        }

        $comments = $this->commentRepository->findAllcommentsNotValidate();
        dump($comments);
        return $this->renderHtml('dashboardAdmin.html.twig', ['comments'=> $comments ]);
    }
}