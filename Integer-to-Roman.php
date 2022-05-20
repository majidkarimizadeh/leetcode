<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        
        $roman = "";
        $symbols = [
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1,
        ];
            
        foreach ($symbols as $symbol => $value) {
            
            if ($num === 0) {
                break;
            }
            
            $count = (int) ($num / $value);
            $roman .= str_repeat($symbol, $count);
            $num -= $count * $value;
        }
        
        return $roman;
    }
}
