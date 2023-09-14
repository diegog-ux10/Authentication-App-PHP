<?php

namespace core;

use core\Request;
use core\Router;
use core\Response;
use core\Database;
use models\User;

class Application
{
    public static string $ROOT_DIR;

    public string $userClass;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public Database $db;
    public ?DbModel $user = null;

    public static Application $app;
    public Controller $controller;
    public function __construct($rootPath, array $config)
    {
        $this->userClass = $config["userClass"];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->controller = new Controller();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config["db"]);
        $primaryValue = $this->session->get("user");
        if($primaryValue) {
            $primaryKey = $this->userClass::primaryKey();
            $this->userClass::findOne([$primaryKey => $primaryValue]);
        }
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getController(): Controller
    {
        return $this->controller;
    }

    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public function login(DbModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set("user", $primaryValue);
        return true;
    }

    public function logout()
    {
        $this->user = null;
        $this->session->remove("user");
    }

    public static function isGuest()
    {
        return !self::$app->user;
    }
}
