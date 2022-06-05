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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        
        $head = new ListNode();
        $merged = $head;
        
        while ($list1 !== null || $list2 !== null) {
            
            if ($list1 === null) {
                $head->next = new ListNode($list2->val);
                $head = $head->next;
                $list2 = $list2->next;
                continue;
            }
            
            if ($list2 === null) {
                $head->next = new ListNode($list1->val);
                $head = $head->next;
                $list1 = $list1->next;
                continue;
            }
            
            if ($list1->val < $list2->val) {
                $head->next = new ListNode($list1->val);
                $head = $head->next;
                $list1 = $list1->next;
            } else {
                $head->next = new ListNode($list2->val);
                $head = $head->next;
                $list2 = $list2->next;
            }            
        }
        return $merged->next;
    }
}
