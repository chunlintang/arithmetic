<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 下午8:01
 */
/**
 * 把一个数组最开始的若干个元素搬到数组的末尾，我们称之为数组的旋转。
 * 输入一个非递减排序的数组的一个旋转，输出旋转数组的最小元素。
 * 例如数组{3,4,5,1,2}为{1,2,3,4,5}的一个旋转，该数组的最小值为1
 */

function getMinFromArray($arr)
{
    return min($arr);
}

// 反之，或取最大值使用max

function getMaxFromArray($arr)
{
    return max($arr);
}