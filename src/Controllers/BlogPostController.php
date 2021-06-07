<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Http\ParametersBag;
use Application\Application\Templating\TwigTrait;

class BlogPostController extends AbstractController
{
    public function getAllBlogs (ServerRequestInterface $request, ParametersBag $bag){
        return $this->renderHtml('blogs-list.html.twig');
    }


    public function getBlog (ServerRequestInterface $request, ParametersBag $bag){
        return $this->renderHtml('blog.html.twig');
    }

    public function createBlog (ServerRequestInterface $request, ParametersBag $bag){
        return $this->renderHtml('newBlog.html.twig');
    }

    public function updateBlog (ServerRequestInterface $request, ParametersBag $bag){
        return $this->renderHtml('updateBlog.html.twig');
    }

    public function deleteBlog (ServerRequestInterface $request, ParametersBag $bag){

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