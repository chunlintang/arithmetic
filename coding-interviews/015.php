<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午10:15
 */
// 最小的k个数
function GetLeastNumbers_Solution($input, $k)
{
    sort($input);
    if ($k > sizeof($input) || $k <= 0) {
        return [];
    }
    $return = [];
    for ($i = 0; $i < $k; $i++) {
        $return[] = $input[$i];
    }
    return $return;
}

$input = [4, 5, 1, 6, 2, 7, 3, 8];
print_r(GetLeastNumbers_Solution($input, 5));