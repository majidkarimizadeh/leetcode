<?php

class Solution {

    const PHP_MAX_INT_32 = 2147483647;
    const PHP_MIN_INT_32 = -2147483647;
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        
        $reversedX = strrev((string) $x);
        
        if (substr($reversedX, -1) === '-') {
            $reversedX = rtrim($reversedX, '-');
            $reversedX = -1 * (int) $reversedX;
            return $reversedX <= self::PHP_MIN_INT_32 ? 0 : $reversedX;
        }
        
        $reversedX = (int) $reversedX;
        return $reversedX >= self::PHP_MAX_INT_32 ? 0 : $reversedX;
    }
}
