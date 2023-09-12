<?php

require_once "autoload.php";
require_once __DIR__ . "/config/config.php";

use core\Application;

$app = new Application($_SERVER["DOCUMENT_ROOT"], $config);

$app->db->applyMigrations();
