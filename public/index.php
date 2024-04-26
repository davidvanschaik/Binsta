<?php

require '../vendor/autoload.php';

use Helpers\DatabaseHelper;
use Controller\VerificationController;
use Routes\Routes;

session_start();

VerificationController::check();
DatabaseHelper::connect();

new Routes();
