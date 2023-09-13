<?php


namespace controllers;

use core\Controller;
use core\Request;
use models\User;

class AuthController extends Controller
{
    public function login()
    {
        $params = [
            "name" => "Diego"
        ];
        $this->setLayout("auth");
        return $this->render("login", $params);
    }
    
    public function register(Request $request)
    {
        $user = new User();

        if($request->isPost()) {
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()) {
                return "sucess";
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