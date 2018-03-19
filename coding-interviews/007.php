<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 下午8:05
 */
/**
 * 现在要求输入一个整数n.
 * 请你输出斐波那契数列的第n项.
 */
function Fibonacci($n)
{
    if ($n == 1 || $n == 2) {
        return 1;
    }
    return Fibonacci($n - 1) + Fibonacci($n - 2);
}

$n = 10; // 1,1,2,3,5,8,13,21,34,55
print_r(Fibonacci($n));