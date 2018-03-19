<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 下午9:15
 */

//反转二叉树，二叉树镜像

function reverseTree(&$root)
{
    if (is_null($root)) {
        return null;
    }
    $tmp1 = null;
    $tmp2 = null;
    if ($root->left) {
        $tmp1 = reverseTree($root->left);
    }
    if ($root->right) {
        $tmp2 = reverseTree($root->right);
    }
    $root->left = $tmp2;
    $root->right = $tmp1;
    return $root;
}