<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/core/Application.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/SiteController.php");

use controllers\SiteController;
use core\Application;

$app = new Application($_SERVER["DOCUMENT_ROOT"]);

$app->router->get("/", [SiteController::class, "register"]);
$app->router->post("/", [SiteController::class, "handleRegister"]);
$app->router->get("/login", [SiteController::class, "login"]);
$app->router->post("/login", [SiteController::class, "handleLogin"]);

$app->run();
