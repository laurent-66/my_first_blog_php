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

    public function getBlog (ServerRequestInterface $request, ParametersBag $bag){

        $id = (int) $bag->getParameter('id')->getValue();

        $blog = $this->blogRepository->findByBlogId($id);

        return $this->renderHtml('blog.html.twig',['blog'=>$blog]);
    }

}