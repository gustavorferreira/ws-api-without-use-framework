<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);
$router->namespace("Source\App\Controllers");

$router->group(null);
$router->get("/", "Login:home");

$router->group("usuario");
$router->get("/", "Login:listUsers");
$router->get("/{id}", "Login:userProfile");
$router->put("/atualizar/{id}", "Login:update");

$router->dispatch();