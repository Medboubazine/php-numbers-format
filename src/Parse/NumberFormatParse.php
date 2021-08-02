<?php
namespace Medboubazine\NumberFormatter\Parse;
class NumberFormatParse
{
/**
 * 
 * constructor
 * 
 */
public function __construct($number){
    $this->number = $number;
}
/**
 * 
 * Number
 * 
 */
protected $number = 0;
/**
 * 
 * Parse number
 * 
 */
public function get(int $decimals = null){
    return ($decimals) ? $this->number_format($this->number,$decimals) : (float) $this->number;
}
/**
 * 
 * Number format function
 * 
 */
public function number_format(float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = ""){
    return number_format($number,$decimals,$dec_point,$thousands_sep);
}
}