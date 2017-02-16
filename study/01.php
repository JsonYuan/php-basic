<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/16 0016
 * Time: 13:26
 */

/**
 * 字符串长度函数
 * strlen    返回字符串所占字节数
 * mb_strlen 返回某个编码下字符串所占字节数
 */
$str = 'hello';
$str1 = '你好';

var_dump(strlen($str));//int 5 每一个英文字符占一个字节
var_dump(strlen($str1));//int 6每一个汉字占三个字节（UTF-8编码）

var_dump(mb_strlen($str));//int 5 少了指定编码格式，会采用默认编码
var_dump(mb_strlen($str1));//int 6

var_dump(mb_strlen($str,'GBK'));//int 5
var_dump(mb_strlen($str1,'GBK'));//int 3 GBK模式下，每个汉字占两个字节 根据编辑器的编码为UTF-8 所以 6/2=>3 如果算出来是带小数的 即4.5将会进一位为 int5

var_dump(mb_strlen($str,'UTF8'));//int 5
var_dump(mb_strlen($str1,'UTF8'));//strlen = 6 UTF8下每个汉字占三个字节 6/3=2

var_dump(strlen(''));//int 0空参数则会输出0
var_dump(mb_strlen('','aaa'));//指定编码不存在，会输出 boolean false



