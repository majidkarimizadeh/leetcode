<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $index = strpos($haystack, $needle);
        return $index === false ? -1 : $index;
    }
}
