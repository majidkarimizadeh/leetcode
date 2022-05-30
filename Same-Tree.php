<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        $this->breadthFirstSearch($p, $pList);
        $this->breadthFirstSearch($q, $qList);
        return $pList === $qList;
    }
    
    function breadthFirstSearch($root, &$list) {
        
        $list[] = $root->val; 
        
        if ($root->left !== null) {
            $this->breadthFirstSearch($root->left, $list);
        } else {
            $list[] = null;
        }
        
        if ($root->right !== null) {
            $this->breadthFirstSearch($root->right, $list);
        } else {
            $list[] = null;
        }
    }
}
