<?php

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        
        $visitedItems = [];
        for ($i = 0; $i < count($numbers); $i++) {
            $diff = $target - $numbers[$i];
            
            if (array_key_exists($diff, $visitedItems)) {
                $result = [$i + 1, $visitedItems[$diff]];
                sort($result);
                return $result;
            } 
            
            $visitedItems[$numbers[$i]] = $i + 1;
        }
    }
}
