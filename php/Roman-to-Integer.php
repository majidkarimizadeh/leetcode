<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        
        $symbols = [
            'I'  => 1,
            'V'  => 5,
            'X'  => 10,
            'L'  => 50,
            'C'  => 100,
            'D'  => 500,
            'M'  => 1000,
            'IV' => 4,
            'IX' => 9,
            'XL' => 40,
            'XC' => 90,
            'CD' => 400,
            'CM' => 900,
        ];
        
        $startCharOfDubleSymbol = [ 'I', 'X', 'C' ];
        
        $i = $sum = 0;
        $chars = str_split($s);
        
        while ($i < count($chars)) {
            if (
                in_array($chars[$i], $startCharOfDubleSymbol) && 
                isset($chars[$i + 1]) && 
                array_key_exists($chars[$i] . $chars[$i + 1], $symbols)
            ) {
                $sum += $symbols[$chars[$i] . $chars[$i + 1]];
                $i += 2;
            } else {
                $sum += $symbols[$chars[$i]];
                $i++;
            }
        }
        return $sum;
    }
}