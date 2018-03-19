<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 下午7:52
 */
/**
 * 用两个栈来实现一个队列，完成队列的Push和Pop操作。队列中的元素为int类型。
 *
 * 思路：使用php的array_push和array_shift函数实现入队和出队.
 */

$stack = [];

function push($node)
{
    global $stack;
    return array_push($stack, $node);
}

function pop()
{
    global $stack;
    return array_shift($stack);
}