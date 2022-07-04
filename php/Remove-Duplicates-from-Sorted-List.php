<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        
        $newHead = new ListNode();
        $newHeadPinter = $newHead;
        $values = [];
        
        while($head !== null) {
            
            if (!in_array($head->val, $values)) {
                $newNode = new ListNode($head->val);
                $newHead->next = $newNode;
                $newHead = $newHead->next;
                $values[] = $head->val;
            }
            $head = $head->next;
        }
        
        return $newHeadPinter->next;
    }
}
