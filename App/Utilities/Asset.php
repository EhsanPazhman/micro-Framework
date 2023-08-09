<?php
namespace App\Utilities;
class Asset{
    public static function __callStatic($name, $arguments)
    {
        return $_ENV['DOMAIN'] . "assets/" . $name . $arguments[0];
    }
}