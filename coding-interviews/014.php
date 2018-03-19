<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午10:00
 */
/**
 * 数组中有一个数字出现的次数超过数组长度的一半，请找出这个数字。
 * 
 * 例如输入一个长度为9的数组{}。
 * 由于数字2在数组中出现了5次，超过数组长度的一半，因此输出2。如果不存在则输出0。
 */
function MoreThanHalfNum_Solution($arr)
{
    if (sizeof($arr) <= 0) {
        return 0;
    }
    $list = array_count_values($arr);
    //print_r($list);
    $max = max($list);
    //print_r($max_value);
    if ($max * 2 > sizeof($arr)) {
        return array_search($max, $list);
    }
    return 0;
}

$arr = [1, 2, 3, 2, 2, 2, 5, 4, 2];
print_r(MoreThanHalfNum_Solution($arr));