<?php
namespace App\DefaultApp;

/**
 * MiscTools
 */
class MiscTools
{
    
    /**
     * Decimal
     *
     * @param  int|float $number
     * @return int|float
     */
    public static function Decimal($number) {
        $whole = (int) $number;
        return $decimal = $number - ($whole*10);
    }

}