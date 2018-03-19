<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午8:03
 */
/**
 * 从上往下打印出二叉树的每个节点，同层节点从左至右打印。
 *
 * 二叉树广度优先遍历
 */
function PrintFromTopToBottom($root)
{
    $return = [];
    array_push($return, $root->val);
    inQueue($root, $return);
    return $return;
}

function inQueue($root, $return)
{
    if (is_null($root)) {
        return null;
    }
    if ($root->left) {
        $left = $root->left;
        array_push($return, $left->val);
    }
    if ($root->right) {
        $right = $root->right;
        array_push($return, $right->val);
    }
    inQueue($left, $return);
    inQueue($right, $return);
}