<?php

namespace app\core;

require_once(__DIR__ . "/Request.php");
require_once(__DIR__ . "/Router.php");

use app\core\Request;
use app\core\Router;

class Application
{
    public Router $router;
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
