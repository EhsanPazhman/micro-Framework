<?php

namespace App\Middleware;
use hisorange\BrowserDetect\Parser as Browser;

use App\Middleware\Contract\MiddlewareInterface;

class GlobalMiddleware implements MiddlewareInterface{
    public function handle(){
        $this->blockUSA();
        $this->blockChina();
    }

    public function blockChina(){
        // if(from china){
        //     die('China was blocked');
        // }
    }
    public function blockUSA(){
        // if(from USA){
        //     die('USA was blocked');
        // }
    }


}