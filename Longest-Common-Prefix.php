<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        
        if (empty($strs)) {
            return "";
        }
        
        if (count($strs) === 1) {
            return $strs[0];
        }
        
        sort($strs);
        
        $i = 0;
        $firstItem = str_split($strs[0]);
        $lastItem  = str_split($strs[count($strs) - 1]);
        
        while ($i < strlen($strs[0]) && $firstItem[$i] === $lastItem[$i]) {
            $i++;
        }
        
        return substr($strs[0], 0, $i);
    }
}
