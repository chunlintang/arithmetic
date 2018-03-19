<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午10:49
 */
// 统计一个数字在排序数组中出现的次数。

function GetNumberOfK($data, $k)
{
    $list = array_count_values($data);
    if (!array_key_exists($k, $list)) {
        return 0;
    }
    return $list[$k];
}

$data = [1, 2, 3, 2, 4, 2, 6, 7, 2];
print_r(GetNumberOfK($data, 2));