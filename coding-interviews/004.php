<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 上午10:13
 */

/**
 * 输入某二叉树的前序遍历和中序遍历的结果，
 * 请重建出该二叉树。假设输入的前序遍历和中序遍历的结果中都不含重复的数字。
 * 例如输入前序遍历序列{1,2,4,7,3,5,6,8}和中序遍历序列{4,7,2,1,5,3,8,6}，
 * 则重建二叉树并返回。
 */
class BinaryTree
{
    var $val;
    var $left = null;
    var $right = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}

$pre = [1, 2, 4, 7, 3, 5, 6, 8];
$mid = [4, 7, 2, 1, 5, 3, 8, 6];

function reConstructBinaryTree($pre, $mid)
{
    if ($pre && $mid) {
        $root = new BinaryTree($pre[0]);
        $index = array_search($pre[0], $mid);
        $root->left = reConstructBinaryTree(array_slice($pre, 1, $index), array_slice($mid, 0, $index));
        $root->right = reConstructBinaryTree(array_slice($pre, $index + 1), array_slice($mid, $index + 1));
        return $root;
    }
}

print_r(reConstructBinaryTree($pre, $mid));