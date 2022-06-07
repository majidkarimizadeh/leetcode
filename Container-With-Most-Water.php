<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        
        $maxContainer = -1;
        $left = 0;
        $right = count($height) - 1;
        
        while ($left < $right) {
            $container = min($height[$left], $height[$right]) * ($right - $left);
            $maxContainer = max($maxContainer, $container);
            
            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        
        return $maxContainer;
    }
}
