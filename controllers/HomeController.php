<?php

namespace Controller;

use Helpers\ViewHelper;

class HomeController
{
    public function index()
    {
        ViewHelper::template('layouts/app.twig', [
            'title' => 'Login',
            'message' => 'Welcome to the Home page!'
        ]);
    }
}
