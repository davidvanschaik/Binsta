<?php

namespace Helpers;

use RedBeanPHP\R;
use Dotenv\Dotenv;


class DatabaseHelper
{
    public static function connect(): void
    {
        $host = $_ENV['DB_HOST'];
        $connection = $_ENV['DB_CONNECTION'];
        $database = $_ENV['DB_DATABASE'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];

        R::setup("$connection:host=$host;dbname=$database", $username, $password);
    }
}
