<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        for ($n = 1; $n * $n <= $x; $n++) {}
        return --$n;
    }
}
