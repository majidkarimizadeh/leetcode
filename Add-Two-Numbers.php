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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        
        $sum = 0;
        while ($l1 !== null || $l2 !== null) {
            
            if ($l1) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }
            
            if ($l2) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }
            
            if ($sum > 9) {
                $numbers[] = $sum % 10;
                $sum = 1;
            } else {
                $numbers[] = $sum;
                $sum = 0;
            }
        }
        
        if ($sum !== 0) {
            $numbers[] = $sum;
        }
        
        $ln = new ListNode(0);
        foreach(array_reverse($numbers) as $number) {
            $ln->next = new ListNode($number, $ln->next); 
        }
        return $ln->next;
    }
}