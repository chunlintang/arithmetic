<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午10:30
 */
/**
 * 输入一个正整数数组，把数组里所有数字拼接起来排成一个数，打印能拼接出的所有数字中最小的一个。
 * 例如输入数组{3，32，321}，则打印出这三个数字能排成的最小数字为321323。
 */
function PrintMinNumber($numbers)
{
    usort($numbers, function ($a, $b) {
        if ("$a$b" > "$b$a") return 1;
        return -1;
    });
    //print_r($numbers);die;
    return implode("", $numbers);
}

$number = [3, 32, 321];
print_r(PrintMinNumber($number));