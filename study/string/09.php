<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/19 0019
 * Time: 21:28
 */
/*
 * 字符串大小写转换函数
 * 字符串转换为小写
 * strtolower($str)
 * 字符串转换为大写
 * strtoupper($str)
 * 将字符串的第一个字符转换为大写
 * ucfirst($str)
 * 将每个单词的首字符转换为大写
 * ucwords($str)
 */

$str = 'ABC de FG AAA';
$str1 = 'aBC de FG AAA';
var_dump(strtolower($str));//string 'abc de fg aaa'
var_dump(strtoupper($str));//string 'ABC DE FG AAA'
var_dump(ucfirst($str1));//string 'ABC de FG AAA'
var_dump(ucwords($str));//string 'ABC De FG AAA'