<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        
        $mergedIntervals = [];
        
        usort($intervals, function ($a, $b) {
            return $a[0] - $b[0];
        });
        
        foreach ($intervals as $interval) {
            
            if (
                empty($mergedIntervals) || 
                $mergedIntervals[count($mergedIntervals) - 1][1] < $interval[0]
            ) {
                $mergedIntervals[] = $interval;
            } else {
                $mergedIntervals[count($mergedIntervals) - 1][1] = max($mergedIntervals[count($mergedIntervals) - 1][1], $interval[1]);
            }
        }
        
        return $mergedIntervals;
    }
}
