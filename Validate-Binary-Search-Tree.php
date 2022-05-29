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
    function isValidBST($root) {
        $items = [];
        $this->traverseInOrderTree($root, $items);
        
        for ($i = 0; $i < count($items) - 1; $i++) {
            if ($items[$i] >= $items[$i + 1]) {
                return false;
            }
        }
        return true;
    }
    
    function traverseInOrderTree($node, &$list) {
        if ($node->left !== null) {
            $this->traverseInOrderTree($node->left, $list);
        }
        
        array_push($list, $node->val);
        
        if ($node->right !== null) {
            $this->traverseInOrderTree($node->right, $list);
        }
    }
}
