<?php 
namespace Application;

use Exception;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

class Application
{
    protected $routeCollection;
    
    public function __construct()
    {
        $this->init();
    }

    public function run(ServerRequestInterface $request)
    {
        try{
            $context = new RequestContext();
            $context->setPathInfo($request->getUri()->getPath());
            $matcher = new UrlMatcher($this->routeCollection, $context);
            $parameters = $matcher->match($context->getPathInfo());
            $controller = $parameters['_controller'];
            $method = $parameters['_method'];
            $callable =[new $controller(), $method];
            return call_user_func_array($callable, [$request]);

        } catch (ResourceNotFoundException $e) {
            //TODO Create exception controller to return not found page
        } catch (MethodNotAllowedException $e){
            //TODO Create exception controller to return not allowed method http
        } catch (Exception $e){
            //TODO Create exception controller to return internal servor error
        }
    }

    private function init()
    {
        $this->routeCollection = new RouteCollection;
        $routes = json_decode(file_get_contents('../config/routing/routes.json'), true);
        foreach($routes as $route){
            $this->routeCollection->add(
                $route['name'],
                new Route(
                    $route['path'],
                    ['_controller' => $route['_controller'], '_method' => $route['_method']],
                    [],
                    [],
                    '',
                    [],
                    $route['_methods']
                )

            );
        }  

    }

}    