<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Application\Repository\BlogRepository;

class AdminController extends AbstractController
{

    protected $blogRepository= '';

    public function __construct()
    {
        $this->blogRepository = new BlogRepository;
    }

    public function createBlog (ServerRequestInterface $request, ParametersBag $bag){

        $this->BlogRepository->createBlog();

        return $this->renderHtml('newBlog.html.twig');
    }

    public function updateBlog (ServerRequestInterface $request, ParametersBag $bag){

        //Récupération de la valeur de l'id blog $id du $bag
        // $id = '';
        $updateBlog = $this->BlogRepository->updateBlog($id);
        return $this->renderHtml('updateBlog.html.twig',['blog'=>$updateBlog]);
    }

    public function deleteBlog (ServerRequestInterface $request, ParametersBag $bag){

        //Récupération de la valeur de l'id blog $id du $bag
        // $id = '';
        
        $this->blogRepository->deleteBlog($id);
        return $this->renderHtml('blogs-list.html.twig');
    }


    public function deleteCommentMember (ServerRequestInterface $request){
        dump($request);
    }

}