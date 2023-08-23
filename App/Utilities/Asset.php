<?php
namespace App\Utilities;

class Asset{
    
    public static function get(string $route){
        return $_ENV['HOST'] . 'assets/' . $route;
    }

    public static function css(string $route){
        return $_ENV['HOST'] . 'assets/css/' . $route;
    }

    public static function js(string $route){
        return $_ENV['HOST'] . 'assets/js/' . $route;
    }

    public static function image(string $route){
        return $_ENV['HOST'] . 'assets/image/' . $route;
    }
}
