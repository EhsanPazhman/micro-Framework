<?php

namespace App\Middleware;
use App\Middleware\Contract\MiddlewareInterface;

class Auth implements MiddlewareInterface{
    public function handle(){
        // if(!Auth::isLogin()){
        //     redirect('/login');
        //     die();
        // }
    }
}