<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午10:56
 */
// 求二叉树的深度

function treeDepth($root)
{
    if ($root == null) {
        return 0;
    }
    $l = treeDepth($root->left);
    $r = treeDepth($root->right);
    return $l > $l ? $l + 1 : $r + 1;
}