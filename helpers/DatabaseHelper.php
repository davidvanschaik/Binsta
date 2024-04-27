<?php

namespace Helpers;

use RedBeanPHP\R;


class DatabaseHelper
{
    public static function connect(): void
    {
//        $host = $_ENV['DB_HOST'];
//        $connection = $_ENV['DB_DATABASE'];
//        $database = $_ENV['DB_DATABASE'];
//        $username = $_ENV['DB_USERNAME'];
//        $password = $_ENV['DB_PASSWORD'];
//
//        R::setup("$connection:host=$host;dbname=$database", $username, $password);

        $host = 'localhost:3306';
        $connection = 'mysql';
        $database = 'Binsta';
        $username = 'root';
        $password = '';

        R::setup("$connection:host=$host;dbname=$database", $username, $password);
    }
}
