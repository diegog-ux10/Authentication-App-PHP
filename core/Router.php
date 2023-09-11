<?php

namespace app\core;

class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes["get"][$path] = $callback;
    }


    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false) {
            return "Not found";
            exit;
        }
        if(is_string($callback)) {
            return $this->renderView($callback);
        }
        echo call_user_func($callback);

    }

    public function renderView($view)
    {
        include_once $_SERVER["DOCUMENT_ROOT"] . "/views/$view.php";
    }


}
