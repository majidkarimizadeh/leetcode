<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        
        $result = [];
        
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                for ($k = $j + 1; $k < count($nums); $k++) {
                    for ($h = $k + 1; $h < count($nums); $h++) {
                        
                        $sum = $nums[$i] + $nums[$j] + $nums[$k] + $nums[$h];
                        if ($sum === $target) {
                            $item = [$nums[$i], $nums[$j], $nums[$k], $nums[$h]];
                            sort($item);
                            if (!in_array($item, $result)) {
                                $result[] = $item;
                            }
                        }
                        
                    }
                }
            }   
        }
        
        return $result;
    }
}
