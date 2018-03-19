<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 上午9:38
 */
/**
 * 在一个二维数组中，每一行都按照从左到右递增的顺序排序，
 * 每一列都按照从上到下递增的顺序排序。请完成一个函数，
 *
 * 输入这样的一个二维数组和一个整数，判断数组中是否含有该整数。
 */
function findMax(&$arr, $target)
{
    $len = sizeof($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < sizeof($arr[$i]); $j++) {
            if ($arr[$i][$j] == $target) {
                return true;
            }
        }
    }
    return false;
}

$arr = [[1, 3, 7, 9, 11, 19], [2, 4, 9, 12, 13, 21], [5, 8, 15, 24, 32, 55]];
print_r(findMax($arr, 7));