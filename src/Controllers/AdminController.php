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
use Application\Helpers\FileUploader;


class AdminController extends AbstractController
{

    protected $blogRepository= '';
    protected $uploadFile;

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

        $errors = [];

        if($request->getMethod() === 'POST') {
            //récupération de données du post dans un tableau
            $dataSubmitted = $request->getParsedBody();
            //récupération image
            $file = $request->getUploadedFiles()['file_input_name'];
            
            if(strlen(
                trim(
                    $dataSubmitted['title-blog'] === 0 || 
                    $file === 0 || 
                    $dataSubmitted['inputChapo'] === 0 || 
                    $dataSubmitted['content'] === 0 ))|| 
                    $file->getSize() === 0
                ){
                $errors[] = 'Tous les champs requis sont obligatoires';
            }else{
                $datasAfterUpload = FileUploader::uploadFile($file);
                dump( $datasAfterUpload['filename']);
                exit;
                if($datasAfterUpload['isSuccess']){
                    //Ajout de la valeur du nom du fichier au tableau $dataSubmitted
                    $dataSubmitted['file_input_name'] = $datasAfterUpload['filename'];

                    // execution de la requête de mise à jour
                    $this->blogRepository->updateBlog($dataSubmitted,$id);

                    //redirection sur la page courante (get)
                    $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
                    return $redirect->send();
                }

            }
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
        $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
        return $redirect->send();

    }

    public function dashboard (ServerRequestInterface $request, ParametersBag $bag){
        //Check if administrator session is open
        if(!array_key_exists('user',$_SESSION) || $_SESSION['user']['admin'] != "1"){

            $redirect = new RedirectResponseHttp('/');
            return $redirect->send();
        }
        //get all blogs list
        $comments = $this->commentRepository->findAllcommentsNotValidate();
        $user = $_SESSION['user']['admin'];
        $blogs = $this->blogRepository->getAllBlog();

        return $this->renderHtml('dashboardAdmin.html.twig',['blogs'=>$blogs,'comments'=> $comments,'user'=>$user]);

    }


    public function getBlog (ServerRequestInterface $request, ParametersBag $bag){

        $user = $_SESSION['user']['admin'];

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

        $findComments = $this->commentRepository->findCommentsByBlogId($id);
        return $this->renderHtml('blog.html.twig',['blog'=>$blog,'findComments'=>$findComments, 'user'=>$user]);
    }

    public function approveComment (ServerRequestInterface $request, ParametersBag $bag ){

        dump($bag);

        //Récupération de la valeur de l'id comment $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();

        $findComments = $this->commentRepository->findCommentsByBlogId($id);
        dump($findComments);
        exit;


        
        $this->CommentRepository->approveComment($id);
        $this->CommentRepository->commentPublished($id);
        $idblog = (int) $bag->getParameter('blogId')->getValue();

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
        return $redirect->send();

    }

    public function deleteComment (ServerRequestInterface $request, ParametersBag $bag){
 
        //Récupération de la valeur de l'id comment $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();
        $this->commentRepository->deleteComment($id);

        // $idblog = (int) $bag->getParameter('blogId')->getValue();

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
        return $redirect->send();
    }

}