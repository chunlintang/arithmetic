<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 上午9:31
 */
/**
 * 输入一个字符串,按字典序打印出该字符串中字符的所有排列。
 * 例如输入字符串abc,则打印出由字符a,b,c所能排列出来的所有字符串abc,acb,bac,bca,cab和cba
 */
function Permutation($str)
{
    if ($str == '') {
        return [];
    }
    $arr = str_split($str);
    sort($arr);
    $r = [];
    pre($arr, $r, '');
    return $r;
}

function pre($arr, &$r, $str)
{
    $len = sizeof($arr);
    if ($len == 1) {
        $r[] = $str . $arr[0];
        //print_r('aaaa');
        return;
    }
    for ($i = 0; $i < $len; $i++) {
        if ($i != 0 && $arr[$i] == $arr[0]) {
            continue;
        }
        swap($arr[$i], $arr[0]);
        //print_r($r);
        pre(array_slice($arr, 1), $r, $str . $arr[0]);
    }
}

function swap(&$a, &$b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

$str = 'abcd';
print_r(Permutation($str));