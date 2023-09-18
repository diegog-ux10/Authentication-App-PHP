<?php


namespace controllers;


use core\Application;
use core\Controller;
use core\Request;
use core\Response;
use models\Edit;

class SiteController extends Controller
{
    public function profile(Request $request, Response $response)
    {
        $user = $_SESSION["user"] ?? null;

        if (!$user) {
            Application::$app->response->redirect("/register");
        }

        $userData = Application::$app->db->getUserData($user);
        $this->setLayout("main");
        return $this->render("profile", [
            "user" => $userData
        ]);
    }

    public function edit(Request $request, Response $response)
    {
        $userId = $_SESSION["user"] ?? null;

        $user = new Edit();

        if ($request->isPost()) {
            $user->loadData($request->getBody());
            if ($user->validate() && $user->updated($userId)) {
                Application::$app->session->setFlash("success", "Register successful");
                Application::$app->response->redirect("/");
            }
            $this->setLayout("main");
            return $this->render("/edit", [
                "model" => $user
            ]);
        }

        if (!$userId) {
            Application::$app->response->redirect("/register");
        }

        $userData = Application::$app->db->getUserData($userId);

        $this->setLayout("main");
        return $this->render("edit", [
            'model' => $user,
            "data" => $userData
        ]);
    }
}
