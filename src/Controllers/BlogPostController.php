<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class BlogPostController
{
    public function getAllBlogs (ServerRequestInterface $request){
        var_dump($request);
    }

    public function getBlog (ServerRequestInterface $request){
        var_dump($request);
    }

    public function createBlog (ServerRequestInterface $request){
        var_dump($request);
    }

    public function updateBlog (ServerRequestInterface $request){
        var_dump($request);
    }

    public function deleteBlog (ServerRequestInterface $request){
        var_dump($request);
    }

}