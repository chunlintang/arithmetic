<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 下午9:01
 */

// 输入一个链表，输出该链表中倒数第k个结点
function getKtoListTail($list, $k)
{
    $tmp = $list;
    $len = 0;
    while ($list != null) {
        $len++;
        $list = $list->next;
    }
    for ($i = 0; $i < $len - $k; $i++) {
        $tmp = $tmp->next;
    }
    return $tmp;
}