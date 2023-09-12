<?php

namespace controllers;

use core\Controller;
use core\Request;

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
        if($request->isPost()) {
            return "handle sumitted data";
        }

        $params = [
            "name" => "Diego"
        ];
        $this->setLayout("auth");
        return $this->render("register", $params);
    }

    public function handleLogin()
    {
        return "Sumimited login";
    }

    public function handleRegister(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        return "Sumimited Register";
    }
}