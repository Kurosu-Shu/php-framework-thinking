<?php

// $routes = [
//     "" => "controllers/IndexController.php",
//     "about" => "controllers/AboutController.php",
//     "contact" => "controllers/ContactController.php",
//     "users" => "controllers/UserController.php"
// ];

$router->get("", "controllers/IndexController.php");
$router->get("about", "controllers/AboutController.php");
$router->get("contact", "controllers/ContactController.php");
$router->post("users", "controllers/UserController.php");