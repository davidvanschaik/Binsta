<?php

namespace Controller;

use Helpers\ViewHelper;

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

    }
}
