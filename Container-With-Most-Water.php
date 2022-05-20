<?php

// TODO: Time Limit Exceeded
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        
        $maxContainer = 0;
        
        for ($i = 0; $i < count($height); $i++) {
            for ($j = $i + 1; $j < count($height); $j++) {
                
                $container = min($height[$i], $height[$j]) * abs($i - $j);
                if ($container > $maxContainer) {
                    $maxContainer = $container;
                }
            }
        }
        
        return $maxContainer;
    }
}
