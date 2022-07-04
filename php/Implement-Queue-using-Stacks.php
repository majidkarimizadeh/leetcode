<?php

class MyQueue {
    
    private SplStack $popStack;
    private SplStack $pushStack;
    
    /**
     */
    function __construct() {
        $this->popStack = new SplStack();
        $this->pushStack = new SplStack();
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->pushStack->push($x);
    }
  
    /**
     * @return Integer
     */
    function pop() {
        $this->movePushStackToPopStackIfRequired();
        return $this->popStack->pop();
    }
  
    /**
     * @return Integer
     */
    function peek() {
        $this->movePushStackToPopStackIfRequired();
        return $this->popStack->top();
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        return $this->pushStack->isEmpty() && $this->popStack->isEmpty();
    }
    
    private function movePushStackToPopStackIfRequired() {
        if ($this->popStack->isEmpty()) {
            while (!$this->pushStack->isEmpty()) {
                $item = $this->pushStack->pop();
                $this->popStack->push($item);
            }
        }
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
