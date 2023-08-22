<?php
namespace App\Middlewares;
use hisorange\BrowserDetect\Parser as Browser; 
use App\Middlewares\Contract\MiddlewareInterface;
class BlockChrome implements MiddlewareInterface{
    public function handle()
    { 
        global $request;
        if (Browser::isChrome()) {
            die('Blocked Chrome');
        }
    }
}