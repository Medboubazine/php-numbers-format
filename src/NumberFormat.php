<?php
namespace Medboubazine\NumberFormatter;

use Medboubazine\NumberFormatter\Parse\NumberFormatParse;

class NumberFormat
{

/**
 * number
 *
 * @var float
 */
protected static $number;

/**
 * __toString
 *
 * @return float
 */
public function __toString(){
    return self::$number;
}
/**
 * parse
 *
 * @param  float $number_
 * @return object|float
 */
public static function parse($number_){
    self::$number = $number_;
    return new NumberFormatParse($number_);
}
}
