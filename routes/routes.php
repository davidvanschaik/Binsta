<?php

namespace Routes;

class Routes
{
    protected array $routes = [
        'GET' => [
            '/home' => [
                'controller' => 'Controller\\HomeController',
                'method' => 'index',
            ],
            '/login' => [
                'controller' => 'Controller\\UserController',
                'method' => 'login',
            ],
            '/signup' => [
                'controller' => 'Controller\\UserController',
                'method' => 'signUp',
            ],
        ],
        'POST' => [
            '/login' => [
                'controller' => 'Controller\\UserController',
                'method' => 'loginPost',
            ],
            '/signup' => [
                'controller' => 'Controller\\UserController',
                'method' => 'signUpPost',
            ],
        ]
    ];

    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'] ?? '/home';
        $method = $_SERVER['REQUEST_METHOD'];
        $route = $this->routes[$method][$url];

        (new $route["controller"])->{$route["method"]}();

//        if (method_exists($route["controller"], $route["method"])) {
//        }
//        echo 'Method not found';
    }

}
