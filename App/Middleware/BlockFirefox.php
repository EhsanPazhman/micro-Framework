<?php

namespace App\Middleware;
use hisorange\BrowserDetect\Parser as Browser;

use App\Middleware\Contract\MiddlewareInterface;

class BlockFirefox implements MiddlewareInterface{
    public function handle(){
        if(Browser::isFirefox()){
            die('Firefox was Blocked !');
        }
    }
}