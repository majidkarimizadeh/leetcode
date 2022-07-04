<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        
        $maxSum = $nums[0];
        $currentSum = 0;
        
        for ($i = 0; $i < count($nums); $i++) {            
            if ($currentSum < 0) {
                $currentSum = 0;
            }
            $currentSum += $nums[$i];
            $maxSum = max($currentSum, $maxSum);
        }
        
        return $maxSum;
    }
}
