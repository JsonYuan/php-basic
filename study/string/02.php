<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/16 0016
 * Time: 14:18
 */
/*
 * 查找字符串指定位置函数
 *查找字符串首次出现的位置（从$offset开始查找$search在$str中的第一次位置）
 *strpos($str,$search[, int $offset = 0]) 第一个参数是原始字符串，第二个参数是要查找的内容，第三个参数是从第几个位置开始查找 默认为0
 *stripos($str,$search[, int $offset = 0]) 此函数和上面的函数功能一样，唯一的不同是不区分大小写
 * 从$offset开始查找$search在$str中的最后一次位置
 * strrpos($str,$search [, int $offset = 0]);
 */

$str = 'hello world how are you hello I am OK';//原始字符串
$search = 'hello';//需要查找的字符串

//查找首次出现的位置
var_dump(strpos($str,$search));//第三个参数缺省，表示从第0个位置（第一个字符）开始查找 int 0；
var_dump(strpos($str,$search,3));//从第三个位置开始查找（第二个字符）int 24（空格也算一个字节数）
//需要注意：不能用返回值 == false来判断是否查找到字符，必须使用全等 === 来判断是否查找到字符串
var_dump(strpos($str,'hahah'));//false
var_dump(stripos($str,'HEllo',2)); //int 24

//最后一次出现的位置
var_dump(strrpos($str,$search));//int 24
var_dump(strrpos($str,$search,25));//false
//不区分大小写的strripos

