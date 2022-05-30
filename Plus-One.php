<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        
        if (count($digits) === 0) {
            return [];
        }
        
        $lastIndex = count($digits) - 1;
        
        if ($digits[$lastIndex] != 9) {
            $lastDigit = $digits[$lastIndex];
            $digits[$lastIndex] = $lastDigit + 1;
            return $digits;
        }
        
        do {
            $digits[$lastIndex] = 0;
            if (isset($digits[$lastIndex - 1])) {
                $digits[$lastIndex - 1] = $digits[$lastIndex - 1] + 1;
            } else {
                array_unshift($digits, 1);
            }
            $lastIndex--;
        } while ($digits[$lastIndex] == 10);
        
        return $digits;
    }
}
