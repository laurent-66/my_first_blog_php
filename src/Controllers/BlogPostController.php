<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Http\ParametersBag;
use Application\Application\Templating\TwigTrait;
use Application\Repository\BlogRepository;

class BlogPostController extends AbstractController
{

    protected $blogRepository= '';

    public function __construct()
    {
        $this->blogRepository = new BlogRepository;
    }

    public function getAllBlogs (ServerRequestInterface $request, ParametersBag $bag){
        
        $blogs = $this->blogRepository->getAllBlog();

        return $this->renderHtml('blogs-list.html.twig',['blogs'=>$blogs]);
    }

    public function getBlog (ServerRequestInterface $request, ParametersBag $bag, $id){

        $blog = $this->BlogRepository->findByBlogId($id);
  
        return $this->renderHtml('blog.html.twig',['blog'=>$blog]);
    }

    public function createBlog (ServerRequestInterface $request, ParametersBag $bag){
        return $this->renderHtml('newBlog.html.twig');
    }

    public function updateBlog (ServerRequestInterface $request, ParametersBag $bag){
        return $this->renderHtml('updateBlog.html.twig');
    }

    public function deleteBlog (ServerRequestInterface $request, ParametersBag $bag){
        
        return $this->renderHtml('updateBlog.html.twig');
    }

    public function getAllComments (ServerRequestInterface $request, ParametersBag $bag){

    }

    public function getComment (ServerRequestInterface $request, ParametersBag $bag){

    }

    public function createComment (ServerRequestInterface $request, ParametersBag $bag){

    }

    public function updateComment (ServerRequestInterface $request, ParametersBag $bag){

    }

    public function deleteComment (ServerRequestInterface $request, ParametersBag $bag){


    }

}