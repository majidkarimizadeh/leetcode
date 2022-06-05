<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        
        $sum = "";
        $index = $overflow = 0;
        $maxLen = max(strlen($a), strlen($b));
        $aNumbers = str_split(strrev($a));
        $bNumbers = str_split(strrev($b));
        
        while ($index < $maxLen) {
            
            $abSum = ($aNumbers[$index] ?? 0) + ($bNumbers[$index] ?? 0);
            $abSum += $overflow;
            
            $overflow = 0;
            if ($abSum >= 2) {
                $overflow = 1;
            }
            
            $sum = strval($abSum % 2) . $sum;
            $index++;
        }
        
        return ($overflow === 1) ? "1" . $sum : $sum;
    }
}
