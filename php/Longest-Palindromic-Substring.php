<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        
        if (strlen($s) < 2 || strrev($s) === $s) {
            return $s;
        }
        
        $substring = $maxSubstring = "";
        $maxSubstringLength = 1;
        $arrayOfChars = str_split($s);
        
        for ($j = 0; $j < count($arrayOfChars); $j++) {
            
            $substring = $arrayOfChars[$j];
            
            for ($i = $j + 1; $i < count($arrayOfChars); $i++) {
                
                $substring .= $arrayOfChars[$i];

                if (strrev($substring) === $substring && strlen($substring) > $maxSubstringLength) {
                    $maxSubstring = $substring;
                    $maxSubstringLength = strlen($substring);
                }
            }
        }
        
        return empty($maxSubstring) ? $substring : $maxSubstring;
    }
}
