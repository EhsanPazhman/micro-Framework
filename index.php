<?php
use App\Core\Routing\Router;
use App\Models\Product;
use App\Models\User;
include "bootstrap/init.php";
$router = new Router();
$router->run();