<?php
use App\Core\Routing\Router;
use App\Models\Product;
use App\Models\User;
include "bootstrap/init.php";
// $user_data = [
//     'name' => 'Negin' ,
//     'email' => 'Negin@gmail.com' ,
//     'password' => 'Negin@test' 
// ];
// $userModel = new User();
// $user = $userModel->sum('id',['id[>]'=>55]);
// for ($i=0; $i < 20; $i++) { 
//     $userModel->create([
//     'name' => "user-$i" ,
//     'email' => "email-$i@gmail.com" ,
//     'password' => "pass-$i" 
//     ]);
// }
// var_dump( $user);

$router = new Router();
$router->run();