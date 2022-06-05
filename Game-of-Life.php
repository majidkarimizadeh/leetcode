<?php

class Solution {

    /**
     * @param Integer[][] $board
     * @return NULL
     */
    function gameOfLife(&$board) {
        
        $results = [];
        for ($i = 0; $i < count($board); $i++) {
            for ($j = 0; $j < count($board[$i]); $j++) {
                $aliveCount = $this->getAliveCount($i, $j, $board);
                
                if ($board[$i][$j] === 1 && ($aliveCount < 2 || $aliveCount > 3)) {
                    $results[] = [$i, $j, 0];
                } else if ($board[$i][$j] === 0 && $aliveCount === 3) {
                    $results[] = [$i, $j, 1];
                }
            }
        }
        
        for ($i = 0; $i < count($results); $i++) {
            $item = $results[$i];
            $board[$item[0]][$item[1]] = $item[2];
        }
    }
    
    function getAliveCount($i, $j, $board) {
        $sum = ($board[$i][$j + 1] ?? 0) +
        ($board[$i][$j - 1] ?? 0) +
        ($board[$i + 1][$j] ?? 0) +
        ($board[$i - 1][$j] ?? 0) +
        ($board[$i - 1][$j - 1] ?? 0) +
        ($board[$i + 1][$j + 1] ?? 0) +
        ($board[$i - 1][$j + 1] ?? 0) +
        ($board[$i + 1][$j - 1] ?? 0);
        
        return $sum;
    }
}
