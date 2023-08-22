<?php
namespace App\Middlewares;
use hisorange\BrowserDetect\Parser as Browser; 
use App\Middlewares\Contract\MiddlewareInterface;
class BlockIE implements MiddlewareInterface{
    public function handle()
    { 
        global $request;
        // echo 'BlockIE';
        if (Browser::isIE()) {
            die('Blocked IE');
        }
    }
}