<?php

$router = $di->getRouter();

// Define your routes here


$router->add(
    '/signup/register',
    [
        'controller' => 'signup',
        'action'     => 'register',
    ]
);
//$router->add('/singupr', ['controller' => 'Login', 'action' => 'index']);

$router->handle();
