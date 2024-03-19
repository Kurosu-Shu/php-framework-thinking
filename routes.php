<?php

use controllers\PagesController;

$router->get("", [PagesController::class, "home"]);
$router->get("about", [PagesController::class, "about"]);
$router->get("contact", [PagesController::class, "contact"]);
$router->post("names", [PagesController::class, "createUser"]);