<?php

namespace Controller;

use Helpers\ViewHelper;

class VerificationController
{
    public static function check(): void
    {
        if (! isset($_SESSION['user_id'])) {
            $_SESSION['user_id'] = 0;
            header('Location: /login');
        }
    }
}
