<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        
        $low = 0;
        $high = count($nums) - 1;
        
        while ($low <= $high) {
            
            $mid = $low + intval(($high - $low) / 2);
            
            if ($nums[$mid] === $target) {
                return $mid;
            } else if ($nums[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        
        return $low;
    }
}
