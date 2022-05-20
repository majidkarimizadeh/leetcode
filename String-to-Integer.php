<?php

class Solution {
    
    const PHP_MAX_INT_32 = 2147483647;
    const PHP_MIN_INT_32 = -2147483648;
    
    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        
        $s = trim($s);
        $chars = str_split($s);
        $flag = 1;
        $number = "";
        
        for ($i = 0; $i < count($chars); $i++) {
            
            if ($i === 0) {
                if ($chars[0] === '-') {
                    $flag = -1;
                    continue;
                }
                if ($chars[0] === '+') {
                    continue;
                }
            }
            
            
            if (is_numeric($chars[$i])) {
                $number .= $chars[$i];
            } else {
                break;
            }
        }
        
        $result = intval($number) * $flag;
        
        if ($flag === -1 && $result <= self::PHP_MIN_INT_32) {
            return self::PHP_MIN_INT_32;
        }
        
        if ($result >= self::PHP_MAX_INT_32) {
            return self::PHP_MAX_INT_32;
        }
        
        return $result;
    }
}
