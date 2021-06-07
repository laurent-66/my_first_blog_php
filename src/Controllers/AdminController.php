<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Controllers\AbstractController;

class AdminController extends AbstractController
{
    public function createBlog (ServerRequestInterface $request){
        return $this->renderHtml('newBlog.html.twig');
    }

    public function updateBlog (ServerRequestInterface $request){
        return $this->renderHtml('updateBlog.html.twig');
    }

    public function deleteBlog (ServerRequestInterface $request){

        $response = new RedirectResponseHttp("/blogs");
        $response->send();
    }

    public function deleteCommentMember (ServerRequestInterface $request){
        dump($request);
    }

}