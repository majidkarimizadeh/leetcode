<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $merged = array_merge($nums1, $nums2);
        sort($merged);
        
        if (count($merged) % 2 === 0) {
            return ($merged[(int) (count($merged) / 2) - 1] + $merged[count($merged) / 2]) / 2;
        } else {
            return $merged[(int) (count($merged) / 2)];
        }
    }
}
