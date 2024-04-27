<?php

namespace Controller;

use Helpers\ViewHelper;
use Controller\DataController;

class UserController
{
    public function login()
    {
        ViewHelper::template('layouts/login.twig', [
            'title' => 'Login',
            'message' => 'Welcome to the login page!'
        ]);
    }

    public function signUp()
    {
        ViewHelper::template('layouts/signup.twig', [
            'title' => 'Signup',
            'message' => 'Welcome to the signup page!'
        ]);
    }

    public function loginPost()
    {
        $user = DataController::loginUser($_POST['username'], $_POST['password']);

        if ($user) {
            $_SESSION['user_id'] = $user->id;
            header('Location: /home');
        } else {
            header('Location: /login');
        }
    }

    public function signUpPost()
    {
        $user = DataController::createUser($_POST['username'], $_POST['email'], $_POST['password']);

        if ($user) {
            $_SESSION['user_id'] = $user;
            header('Location: /home');
        } else {
            header('Location: /signup');
        }
    }
}
