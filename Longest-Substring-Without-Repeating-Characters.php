<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) { 
        
        if (strlen($s) < 1) {
            return strlen($s);
        }
        
        $subStrings = [];
        $subString = "";
        $chars = str_split($s);
        
        for ($i = 0; $i < count($chars); $i++) {
            $subString = $chars[$i];
            for ($j = $i + 1; $j < count($chars); $j++) {
                
                if (strpos($subString, $chars[$j]) !== false) {
                    break;
                }
                
                $subString .= $chars[$j];
            }
            $subStrings[] = strlen($subString);
            $subString = "";
        }
        return max($subStrings);
    }
}