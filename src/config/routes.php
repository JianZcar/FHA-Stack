<?php

use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// You can change the 404 and 403 page in views/
$app->map('notFound', function () use ($app) {
  http_response_code(404);
  $app->render('404');
});

$router->get('/403', function () use ($app) {
  http_response_code(403);
  $app->render('403');
});

$router->get('/', function () use ($app) {
  $app->render('htmx-alpine');
});

$router->get('/message', function () {
  echo "<p>This is a message loaded with HTMX</p>";
});

$router->get('/ts', function () use ($app) {
  $app->render('ts-page');
});


// Example post
$router->post('/login', function () {
  $username = trim($_POST['username'] ?? '');
  $password = $_POST['password'] ?? '';

  if ($username === '') {
    return;
  }

  if ($password !== 'password') {
    return;
  }

  $_SESSION['username'] = $username;
});
