<?php

namespace controllers;

use core\Application;
use core\Controller;
use core\Request;
use core\Response;

class SiteController extends Controller
{
    public function profile(Request $request, Response $response)
    {
        var_dump(Application::$app->user);
        if(!$_SESSION["user"]) {
            echo "entre";
            Application::$app->response->redirect("/register");
        }
        $this->setLayout("main");
        return $this->render("profile");
    }

}
