<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        
        $result = [];
        sort($nums);
        for ($i = 0; $i < count($nums); $i++) {
            
            $left = $i + 1;
            $right = count($nums) - 1;
            
            while ($left < $right) {
                if (($nums[$left] + $nums[$right] + $nums[$i]) > 0) {
                    $right -= 1;
                } else if (($nums[$left] + $nums[$right] + $nums[$i]) < 0) {
                    $left += 1;
                } else {
                    $key = strval($nums[$i]) . strval($nums[$left]) . strval($nums[$right]);
                    $result[$key] = [$nums[$i], $nums[$left], $nums[$right]];
                    $left += 1;
                }
            }
        }
        
        return array_values($result);
    }
}
