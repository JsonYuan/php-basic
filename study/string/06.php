<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/17 0017
 * Time: 18:50
 */

/*
 * 去除/增加空格函数
 * 去除字符串首尾处的空白字符
 * string trim(string $str[, string $charlist])
 * string ltrim(string $str[, string $charlist])
 * string rtrim(string $str[, string $charlist])
 * 将字符串分割成小块
 * string chunk_split(string $body[,int $chunklen = 76[,string $end = "\r\n"]])
 * 使用另一个字符串填充字符串为指定长度，默认填充空格字符
 * str_pad(string $str,int $pad_length)
 */

$str1 = '   hello     ';
var_dump(trim($str1));//去除两边空格
var_dump(ltrim($str1));//去除左边
var_dump(rtrim($str1));//去除右边

$str1 = 'abcdefg';
var_dump(chunk_split($str1,2,' '));//string 'ab cd ef g '表示每两个字符长度切割 用' '字符进行连接

$str2 = 'hello';
var_dump(str_pad($str2,'10'));//string 'hello     ' 默认的填充是空白字符,指定第三个参数后才是填充对应的字符