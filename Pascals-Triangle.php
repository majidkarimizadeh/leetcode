<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        
        $records = [[1]];
        for ($i = 1; $i < $numRows; $i++) {
            $tmp = [0, ...$records[$i - 1], 0];
            $row = [];
            for ($j = 0; $j < count($tmp) - 1; $j++) {
                $row[] = $tmp[$j] + $tmp[$j + 1];
            }
            $records[] = $row;
        }
        return $records;
    }
}
