<?php


namespace controllers;

use core\Application;
use core\Controller;
use core\middlewares\AuthMiddlewares;
use core\Request;
use core\Response;
use models\Login;
use models\User;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddlewares(["profile"]));
    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new Login();
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect("/");
            }
        }
        $this->setLayout("auth");
        return $this->render("login", [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $user = new User();

        if ($request->isPost()) {

            $user->loadData($request->getBody());
            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash("success", "Register successful");
                Application::$app->response->redirect("/login");
            }
            $this->setLayout("auth");
            return $this->render("register", [
                "model" => $user
            ]);
        }
        $this->setLayout("auth");
        return $this->render("register", [
            "model" => $user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect("/");
    }
}
