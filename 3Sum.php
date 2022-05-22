<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        
        $sums = [];
        
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                for ($k = $j + 1; $k < count($nums); $k++) {
                    
                    if (($nums[$i] + $nums[$j] + $nums[$k]) === 0) {
                        $sum = [$nums[$i], $nums[$j], $nums[$k]];
                        sort($sum);
                        if (!in_array($sum, $sums)) {
                            $sums[] = $sum;
                        }
                    }
                    
                }
            }
        }
        
        return $sums;
    }
}
