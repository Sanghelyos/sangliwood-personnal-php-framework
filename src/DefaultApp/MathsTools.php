<?php
namespace App\DefaultApp;
/**
 * MathsTools
 */
class MathsTools
{
    /**
     * Decimal
     *
     * @param  int|float $number
     * @return int|float
     */
    public static function Decimal ($number) {
        $whole = floor($number);
        return $number - ($whole);
    }

    /**
     * DecimalAsInteger
     *
     * @param  int|float $number
     * @return int|float
     */
    public static function DecimalAsInteger ($number) {

        $decimal = self::Decimal($number);
        $decimalLength = strlen((string)$decimal) - 2;
        $multiplier = 1;
        for ($i = 0; $i < $decimalLength; $i++){
            $multiplier .= 0;
        }
        return $decimal * intval($multiplier);
    }

    /**
     * Integer
     *
     * @param  int|float $number
     * @return int|float
     */
    public static function Integer ($number) {
        return $number - self::Decimal($number);
    }

    /**
     * NumberData
     *
     * @param  int|float $number
     * @return int|float
     */
    public static function NumberData ($number) {
        return ['integer' => self::Integer($number), 'decimal' => self::Decimal($number), 'decimalAsInteger' => self::DecimalAsInteger($number)];
    }

}