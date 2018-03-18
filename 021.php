<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 下午12:32
 */
function KthNode($pRoot, $k)
{
    $arr = [];
    if (is_null($pRoot)) {
        return $arr;
    }
    inOrder($pRoot, $arr);
    return $arr[$k - 1];
}

function inOrder($pRoot, &$arr)
{
    inOrder($pRoot->left, $arr);
    $arr[] = $pRoot;
    inOrder($pRoot->right, $arr);
}