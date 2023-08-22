<?php
namespace App\Middlewares;
use hisorange\BrowserDetect\Parser as Browser; 
use App\Middlewares\Contract\MiddlewareInterface;
class BlockFirefox implements MiddlewareInterface{
    public function handle()
    {
        global $request;
        // echo "BlockFirefox<br>";
        if (Browser::isEdge()) {
            die('Blocked Firefox');
        }
    }
}