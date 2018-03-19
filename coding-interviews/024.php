<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 下午1:01
 */
/**
 * 请实现一个函数，用来判断一颗二叉树是不是对称的。注意，如果一个二叉树同此二叉树的镜像是同样的，定义其为对称的。
 */
function isSymmetrical($root)
{
    if (is_null($root)) {
        return true;
    }
    return compare($root->left, $root->right);
}

function compare($pLeft, $pRight)
{
    if (is_null($pLeft) && is_null($pRight)) {
        return true;
    } elseif (is_null($pLeft) || is_null($pRight)) {
        return false;
    } elseif ($pLeft->val != $pRight->val) {
        return false;
    }
    return compare($pLeft->left, $pRight->right) && compare($pLeft->right, $pRight->left);
}