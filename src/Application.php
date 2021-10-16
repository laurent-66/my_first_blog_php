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
use Application\Application\Http\Parameter;
use Application\Application\Http\ParametersBag;
use Application\Exceptions\NotFoundException;

class Application
{
    protected $routeCollection;

    public function __construct()
    {
        $this->init();
    }

    public function run(ServerRequestInterface $request)
    {
        try {
            $context = new RequestContext();
            $context->setPathInfo($request->getUri()->getPath());
            $matcher = new UrlMatcher($this->routeCollection, $context);
            $parameters = $matcher->match($context->getPathInfo());
            $controller = $parameters['_controller'];
            $method = $parameters['_method'];
            unset($parameters['_controller']);
            unset($parameters['_method']);
            unset($parameters['_route']);

            $callable = [new $controller(), $method];
            $bagParams = new ParametersBag();

            foreach ($parameters as $key => $value) {
                $param = new Parameter($key, $value);
                $bagParams->addParameter($param);
            }
            $response = call_user_func_array($callable, [$request, $bagParams]);
            return $response;
        } catch (ResourceNotFoundException $e) {
                //TODO Create exception controller to return not found page
                echo "ResourceNotFoundException";
        } catch (MethodNotAllowedException $e) {
                //TODO Create exception controller to return not allowed method http
                echo "MethodNotAllowedException";
        } catch (NotFoundException $e) {
                //erreur personnalisé
                // $controller = new ErrorController();
                // return $controller->notFound();
                echo "Personnalized error to do";
        } catch (Exception $e) {
            //TODO Create exception controller to return internal servor error
            echo $e->getMessage();
        }
    }

    private function init()
    {
        $this->routeCollection = new RouteCollection();
        $routes = json_decode(file_get_contents('../config/routing/routes.json'), true);
        foreach ($routes as $route) {
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
