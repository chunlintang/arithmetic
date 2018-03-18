<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午10:37
 */
// 输入两个链表，找出它们的第一个公共结点。
function FindFirstCommonNode($pHead1, $pHead2)
{
    if ($pHead1 == null || $pHead2 == null) {
        return null;
    }
    $arr1 = $arr2 = [];
    while ($pHead1 != null) {
        $arr1[] = $pHead1;
        $pHead1 = $pHead1->next;
    }
    while ($pHead2 != null) {
        $arr2[] = $pHead2;
        $pHead2 = $pHead2->next;
    }
    $firstCommon = null;
    while (!empty($arr1) && !empty($arr2)) {
        $pNode1 = array_pop($arr1);
        $pNode2 = array_pop($arr2);
        if ($pNode1->val == $pNode2->val) {
            $firstCommon = $pHead1;
        } else {
            break;
        }
    }
    return $firstCommon;
}