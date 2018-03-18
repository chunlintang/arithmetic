<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午11:07
 */
// 输入一棵二叉树，判断该二叉树是否是平衡二叉树。
function IsBalanced_Solution($root)
{
    if ($root == null) {
        return true;
    }
    $l = treeDepth($root->left);
    $r = treeDepth($root->right);
    if (abs($l - $r) > 1) {
        return false;
    }
    return IsBalanced_Solution($root->left) && IsBalanced_Solution($root->right);
}

function treeDepth($root)
{
    if ($root == null) {
        return 0;
    }
    return max(treeDepth($root->left) + 1, treeDepth($root->right) + 1);
}