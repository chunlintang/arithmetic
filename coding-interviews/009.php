<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 下午8:54
 */
/**
 * 一只青蛙一次可以跳上1级台阶，也可以跳上2级……它也可以跳上n级。求该青蛙跳上一个n级的台阶总共有多少种跳法。
 */
function jumpFloor($n)
{
    if ($n == 1) {
        return 1;
    }
    return pow(2, ($n - 1));
}

$n = 5;
print_r(jumpFloor($n));