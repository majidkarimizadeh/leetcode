<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        $visitedItems = [];
        for ($i = 0; $i < count($nums); $i++) {
            $diff = $target - $nums[$i];            
            
            if (array_key_exists($diff, $visitedItems)) {
                return [$i, $visitedItems[$diff]];
            } 
            
            $visitedItems[$nums[$i]] = $i;
        }
    }
}
