<?php

namespace app\core;

require_once(__DIR__ . "/Request.php");
require_once(__DIR__ . "/Router.php");

use app\core\Request;
use app\core\Router;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
