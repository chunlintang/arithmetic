<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 下午1:01
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