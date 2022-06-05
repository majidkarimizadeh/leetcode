<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if ($n <= 2) {
            return $n;
        }
        return $this->fib($n);
    }
    
    function fib($n) {
        $resut = 0;
        $first = $second = 1;
        for ($i = 1; $i < $n; $i++) {
            $resut = $first + $second;
            $first = $second;
            $second = $resut;
        }
        return $resut;
    }
}
