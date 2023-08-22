<?php
use App\Core\Routing\Router;
include "bootstrap/init.php";
// $route = '/post/{slug}/comment/{cid}';
// nice_dump($route);
// nice_dump($patern);
// nice_dump('/^\/post\/(?<slug>[-%\w]+)$/');  
$router = new Router();
$router->run();