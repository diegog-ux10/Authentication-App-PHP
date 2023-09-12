<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/core/Application.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/SiteController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/AuthController.php");

use controllers\AuthController;
use controllers\SiteController;
use core\Application;

$app = new Application($_SERVER["DOCUMENT_ROOT"]);

$app->router->get("/", [AuthController::class, "register"]);
$app->router->post("/", [AuthController::class, "register"]);

$app->router->get("/login", [AuthController::class, "login"]);
$app->router->post("/login", [AuthController::class, "login"]);

$app->run();
