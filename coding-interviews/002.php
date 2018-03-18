<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 上午9:45
 */
/**
 * 请实现一个函数，将一个字符串中的空格替换成“%20”。
 * 例如，当字符串为We Are Happy.则经过替换之后的字符串为We%20Are%20Happy
 */
/*function replaceBlank($str, $substr = '%20')
{
    $arr = explode(' ', $str);
    for ($i = 0; $i < sizeof($arr) - 1; $i++) {
        $arr[$i] = $arr[$i] . $substr;
    }
    return implode('', $arr);
}*/

function replaceBlank($str, $substr = '%20')
{
    return str_replace(' ', $substr, $str);
}

$str = "We Are Happy.";
print_r(replaceBlank($str));