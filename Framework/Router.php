<?php

namespace Framework;
use App\Controllers\ErrorController;

class Router
{
    public $routes = [];

    public function add($uri, $action, $method)
    {
        list($controller, $controllerMethod) = explode('@', $action);
        
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod,
            'method' => $method,
        ];
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function route($uri, $method)
    {
        $controllers = [];
        foreach($this->routes as $route) {
            $controllers[] = $route;
            if ($route['uri'] === $uri && $route['method'] === $method) {
                $controllerMethod = $route['controllerMethod'];
                $controllerClass = 'App\\Controllers\\' . $route['controller'];    
                $controllerInstance = new $controllerClass();
                $controllerInstance->$controllerMethod();
                return;
            } 
        }

        ErrorController::notFound();
    }
}