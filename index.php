<?php

require_once "autoload.php";
require_once __DIR__ . "/config/config.php";

use controllers\AuthController;
use core\Application;

$app = new Application($_SERVER["DOCUMENT_ROOT"], $config);

$app->router->get("/register", [AuthController::class, "register"]);
$app->router->post("/register", [AuthController::class, "register"]);

$app->router->get("/login", [AuthController::class, "login"]);
$app->router->post("/login", [AuthController::class, "login"]);

$app->router->post("/logout", [AuthController::class, "logout"]);

$app->router->get("/user", [AuthController::class, "user"]);

$app->run();
