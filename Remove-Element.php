<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        
        $keys = array_keys($nums, $val);
        foreach ($keys as $key) {
            unset($nums[$key]);
            array_push($nums, '_');
        }
        return count($nums) - count($keys);
    }
}
