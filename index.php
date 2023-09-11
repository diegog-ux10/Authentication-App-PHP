<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/core/Application.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/SiteController.php");

use app\controllers\SiteController;
use app\core\Application;

$app = new Application($_SERVER["DOCUMENT_ROOT"]);

$app->router->get("/", "register");
$app->router->post("/", [SiteController::class, "handleLogin"]);
$app->router->get("/login", "login");
$app->router->post("/login", "login");

$app->run();
