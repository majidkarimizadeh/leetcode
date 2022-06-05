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
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $list = [];
        $this->inOrder($root, $list);
        return $list;
    }
    
    function inOrder($root, & $list) {
        
        if ($root->left !== null) {
            $this->inOrder($root->left, $list);
        }
        
        $list[] = $root->val;
        
        if ($root->right !== null) {
            $this->inOrder($root->right, $list);
        }
    }
}
