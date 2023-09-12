<?php

namespace controllers;

require_once(__DIR__ . "/../core/Controller.php");

use core\Application;
use core\Controller;
use core\Request;

class SiteController extends Controller
{
    public function login()
    {
        $params = [
            "name" => "Diego"
        ];

        return $this->render("login", $params);
    }
    
    public function register()
    {
        $params = [
            "name" => "Diego"
        ];

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
