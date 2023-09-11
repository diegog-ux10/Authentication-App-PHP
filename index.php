<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/core/Application.php");

use app\core\Application;

$app = new Application();

$app->router->get("/", "login");
$app->router->get("/register", "register");

$app->run();