<?php

namespace controllers;

require_once(__DIR__ . "/../models/RegisterModel.php");

use core\Controller;
use core\Request;
use models\RegisterModel;

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
        $registerModel = new RegisterModel();

        if($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register()) {
                return "sucess";
            }
            $this->setLayout("auth");
            return $this->render("register", [
                "model" => $registerModel
            ]);
        }
        $this->setLayout("auth");
        return $this->render("register", [
            "model" => $registerModel
        ]);
    }
}