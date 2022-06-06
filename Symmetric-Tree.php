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
     * @return Boolean
     */
    function isSymmetric($root) {
        return $this->isMirror($root, $root);
    }
    
    function isMirror($root1, $root2) {

        if ($root1 === null && $root2 === null) {
            return true;
        }
        
        if ($root1 === null || $root2 === null) {
            return false;
        }
        
        if ($root1->val !== $root2->val) {
            return false;
        }
        
        return $this->isMirror($root1->left, $root2->right) && $this->isMirror($root2->right, $root1->left);
    }
}
