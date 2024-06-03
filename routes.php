<?php

// return [
//     '/' => 'controllers/home.php',
//     '/blog' => 'controllers/blog/index.php',
//     '/blog/create' => 'controllers/blog/create.php',
//     '404' => 'controllers/error/404.php'
// ];

$router->get('/', 'controllers/home.php');
$router->get('/blog', 'controllers/blog/index.php');
$router->get('/blog/create', 'controllers/blog/create.php');