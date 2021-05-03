<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);
$router->namespace("Source\App\Controllers");

$router->group(null);
$router->get("/", "UserController:index");

$router->group("user");
$router->get("/", "UserController:index", "user.index");
$router->get("/{id}", "UserController:show", "user.show");
$router->post("/", "UserController:store", "user.store");
$router->put("/{id}", "UserController:update", "user.update");
$router->delete("/{id}", "UserController:destroy", "user.destroy");

$router->dispatch();