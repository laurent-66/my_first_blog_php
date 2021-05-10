<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\RedirectResponseHttp;
use Application\App\Http\ResponseHttp;

class BlogPostController
{
    public function getAllBlogs (ServerRequestInterface $request){
        $response = new RedirectResponseHttp('/blogs');
        $response->send();
    }

    public function getBlog (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blogs/{id}");
        $response->send();
    }

    public function createBlog (ServerRequestInterface $request){
        $response = new RedirectResponseHttp('/blogs/new');
        $response->send();
    }

    public function updateBlog (ServerRequestInterface $request){
        $response = new RedirectResponseHttp('/blogs/{id}/edit');
        $response->send();
    }

    public function deleteBlog (ServerRequestInterface $request){
        var_dump($request);
    }

}