<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/17 0017
 * Time: 18:17
 */
/*
 * 字符串分割/链接/反转函数
 * $str按$len长度进行分割返回数组
 * str_split($str,$len)
 * 把$str按照$search字符进行分割返回数组，$limit表示返回数组最多包含的元素
 * split($search,$str [，int $limit])
 * explode($search,$str [,int $limit])
 * 将一个一维数组的值转化为字符串
 * implode(string $glue,array $pieces)
 * 字符串反转
 * strrev（$str）
 */
$str = 'abcdefg';
var_dump(str_split($str,2));//拆分成数组，每个数组两个value

$str1 = 'ab:c:ed:g';
var_dump(split(":",$str1,"3"));//已经被explode函数取代
var_dump(explode(":",$str1,"3"));//已经被explode函数取代

//implode将数组转换成为字符串，和explode是对立函数

//字符串反转
var_dump(strrev($str));//string 'gfedcba'