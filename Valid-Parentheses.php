<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        
        $symbols = [
            "(" => ")",
            "{" => "}",
            "[" => "]",
        ];
        $stack = new SplStack();
        $chars = str_split($s);
        $lastPushedItem = null;
        
        for ($i = 0; $i < count($chars); $i++) {
            
            if (in_array($chars[$i], array_keys($symbols))) {
                $stack->push($chars[$i]);
                continue;
            }
                
            if ($stack->isEmpty()) {
                return false;
            }

            $lastPushedItem = $stack->pop();
            if ($symbols[$lastPushedItem] !== $chars[$i]) {
                return false;
            }
        }
        
        return $stack->isEmpty();
    }
}
