<?php
namespace Medboubazine\NumberFormatter;

use Medboubazine\NumberFormatter\Parse\NumberFormatParse;

class NumberFormat
{
/**
 * 
 * Number
 * 
 */
protected static $number;
/**
 * 
 * 
 */
public function __toString(){
    return self::$number;
}
/**
 * 
 * Parse number
 * 
 */
public static function parse($number_){
    self::$number = $number_;
    return new NumberFormatParse($number_);
}
}
