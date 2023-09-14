<?php


namespace controllers;

use core\Application;
use core\Controller;
use core\Request;
use core\Response;
use models\Login;
use models\User;

class AuthController extends Controller
{
    public function login(Request $request, Response $response)
    {
        $loginForm = new Login();
        if($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()) {
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

        if($request->isPost()) {
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()) {
                Application::$app->session->setFlash("success", "Register successful");
                Application::$app->response->redirect("/");
                
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
}