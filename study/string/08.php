<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/19 0019
 * Time: 21:18
 */
/*
 * 比较字符函数
 * 字符串比较大小，如果str1小于str2返回-1；如果str1大于str2返回1，如果两者相等返回0
 *
 * int strcmp($str1,$str2)区分大小写
 * int strcasecmp（$str1,$str2）不区分大小写
 */

$str = 'hello';
$str1 = 'Hello';

var_dump(strcmp($str,$str1)); //int 1  表示$str1 大于 $str2  根据ascii码比较的大小
var_dump(strcmp($str1,$str));//int -1
var_dump(strcmp($str,'hello'));//int 0
var_dump(strcasecmp($str,$str1));//int 0
