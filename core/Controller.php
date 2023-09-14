<?php

namespace core;

use core\middlewares\BaseMiddleware;

class Controller 
{
    public string $layout = "main";
    public string $action = "";
    /**
     * @var core\middlewares\BaseMiddlewate[];
     */
    protected array $middlewares = [];
    
    public function setLayout($layout) {
        $this->layout = $layout; 
    }

    public function render($view, $params = []) 
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middlewares) 
    {
        $this->middlewares[] = $middlewares;
    }

    public function getMiddleware():array 
    {
        return $this->middlewares;
    }
}