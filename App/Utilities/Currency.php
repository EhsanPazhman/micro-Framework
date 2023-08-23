<?php
namespace App\Utilities;

class Currency{
    
    public static function format_price_in_hezar_toman(int $amount): int
    {
        return $amount / 1000;
    }

    public static function format_price_in_million_toman(int $amount): int
    {
        return $amount / 1000000;
    }

    public static function format_price_in_toman(int $amount): int
    {
        return $amount;
    }

    public static function format_price_in_rial(int $amount): int
    {
        return $amount * 10;
    }

}
