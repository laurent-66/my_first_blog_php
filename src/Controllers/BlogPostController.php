<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Http\ParametersBag;
use Application\Application\Templating\TwigTrait;
use Application\Repository\BlogRepository;
use Application\Repository\CommentRepository;

class BlogPostController extends AbstractController
{
    
    protected $blogRepository;
    private $commentRepository;

    public function __construct()
    {
        $this->blogRepository = new BlogRepository;
        $this->commentRepository = new CommentRepository();
    }

    public function getAllBlogs (ServerRequestInterface $request, ParametersBag $bag){

        
        $blogs = $this->blogRepository->getAllBlog();
        //return $this->renderHtml('blogs-list.html.twig',['blogs'=>$blogs,'user'=>$user]);
        return $this->renderHtml('blogs-list.html.twig',['blogs'=>$blogs]);

    }

    public function getBlog (ServerRequestInterface $request, ParametersBag $bag){


        // $user = $_SESSION['user']['admin'];

        $id = (int) $bag->getParameter('id')->getValue();

        $blog = $this->blogRepository->findByBlogId($id);

        if($request->getMethod() === 'POST') {
      
            //récupération de données du post dans un tableau
            $dataArray = $request->getParsedBody();

            //création d'un commentaire
            $this->commentRepository->submitComment($dataArray,$id);
            //redirection sur la page courante (get)
            $redirect = new RedirectResponseHttp('/blogs/'.$id);
            return $redirect->send();
        }

            $findCommentsPublished = $this->commentRepository->findAllcommentsValidate();
            // $findComments = $this->commentRepository->findCommentsByBlogId($id);

            return $this->renderHtml('blog.html.twig',['blog'=>$blog, 'blogId'=>$id, 'findComments'=>$findCommentsPublished]);

    }

}