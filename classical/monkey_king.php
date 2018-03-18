<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 下午1:19
 */
/**
 * 约瑟夫环。
 * 猴子选大王问题：一群猴子排成一圈，按1,2,…,n依次编号。
 * 然后从第1只开始数，数到第m只,把它踢出圈，从它后面再开始数， 再数到第m只，在把它踢出去…，如此不停的进行下去，
 * 直到最后只剩下一只猴子为止，那只猴子就叫做大王。要求编程模拟此过程，输入m、n, 输出最后那个大王的编号。
 */
function money_king($n, $m)
{
    $arr = range(1, $n);
    $i = 0;
    while (count($arr) > 1) {
        $i++;
        $survice = array_shift($arr);
        if ($i % $m != 0) {
            array_push($arr, $survice);
        }
    }
    return $arr[0];
}