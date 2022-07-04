<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        
        $words = explode(' ', trim($s));
        return strlen($words[count($words) - 1]);
    }
}
