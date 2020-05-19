<?php

use Phalcon\Mvc\Router;

$mod_config = [
    'namespace' => $module['webControllerNamespace'],
    'module' => $moduleName,
];

/** @var Router $router */

$router->add('/register', array_merge($mod_config, [
    'controller' => 'register',
    'action' => 'index'
]));

$router->add('/login', array_merge($mod_config, [
    'controller' => 'login',
    'action' => 'index'
]));

$router->add('/profile', array_merge($mod_config, [
    'controller' => 'profile',
    'action' => 'index'
]));

$router->add('/', array_merge($mod_config, [
    'controller' => 'welcome',
    'action' => 'index'
]));

$router->add('/hashtags', array_merge($mod_config, [
    'controller' => 'hashtags',
    'action' => 'index'
]));

$router->add('/h/{hashtag}', array_merge($mod_config, [
    'controller' => 'hashtag',
    'action' => 'index'
]));

$router->add('/post/{id}', array_merge($mod_config, [
    'controller' => 'postdetail',
    'action' => 'index'
]));
