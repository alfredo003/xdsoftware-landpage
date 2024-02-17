<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\App");

/* 
 * WEB ROUTES
 */
$route->group(null);
$route->get("/", "Web:home"); 
$route->post("/", "Web:home"); 
$route->post("/sendemail", "Web:sendEmail"); 
$route->get("/geral@conviktus.co.ao", "Web:sendEmail"); 
/*
 * ERROR ROUTES
 */
$route->group("/ops");
$route->get("/{errcode}", "Web:error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();