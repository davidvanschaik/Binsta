<?php

namespace Controller;

use Helpers\ViewHelper;

class VerificationController
{
    public static function check(): void
    {
        if (! isset($_SESSION['user_id'])) {
            session_destroy();
//            $_SERVER['REQUEST_URI'] = '/login';
        }
    }
}
