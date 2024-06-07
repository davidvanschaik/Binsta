<?php

namespace Seeder;

use Faker\Factory;
use RedBeanPHP\R;
use Helpers\DatabaseHelper;

require_once '../vendor/autoload.php';

class UserSeeder
{
    public static function seedUser(): void
    {
        $faker = Factory::create();
        $count = 0;

        for ($i = 0; $i < 10; $i++) {
            $user = [
                'username' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password
            ];

            $count++;
            R::store(R::dispense('users')->import($user));
        }
        echo "Stored $count users." . PHP_EOL;
    }

    public static function seedPost(): void
    {
        $faker = Factory::create();
        $count = 0;
        DatabaseHelper::connect();

        for ($i = 0; $i < 10; $i++) {
            $post = [
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'user_id' => rand(1, 10)
            ];

            $count++;
            R::store(R::dispense('posts')->import($post));
        }
        echo "Stored $count posts." . PHP_EOL;
    }
}
