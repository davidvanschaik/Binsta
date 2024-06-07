<?php

require '../vendor/autoload.php';

use Controller\VerificationController;
use Dotenv\Dotenv;
use Helpers\DatabaseHelper;
use routes\Routes;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();

VerificationController::check();
DatabaseHelper::connect();

new Routes();
