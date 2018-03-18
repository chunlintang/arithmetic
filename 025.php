<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 下午1:11
 */
// 求1+2+3+.....+n不使用for while if else switch case等关键字及条件判断语句

function Sum_Solution($n)
{
    $sum = 0;
    $n > 0 && $sum += Sum_Solution($n - 1) + $n;
    return $sum;
}

print_r(Sum_Solution(6)); // 1+2+3+4+5+6