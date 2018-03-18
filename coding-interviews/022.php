<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 下午12:44
 */
// 序列化、反序列化二叉树

function serializeTree($root)
{
    return serialize($root);
}

function unSerializeTree($root)
{
    return unserialize($root);
}