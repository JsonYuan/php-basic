<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/16 0016
 * Time: 15:13
 */
/*
 * 字符串替换函数
 *从$str中查找$search用$replace来替换
 * str_replace($search,$replace,$str[,int &$count])
 * str_ireplace($search,$replace,$str[,int &$count]) 忽略大小写
 * strtr($str,$search,$replace,) 这个函数中的replace 不能为空
 * 替换字符串中的子串
 * substr_replace($str,$rep,$start[,length])$str原始字符串，$rep替换后的新字符串,$start起始位置，$length替换的长度
 */

$str = 'hello world how are you hEllo i am ok';//原始字符串
$search = 'hello';                            //要替换的字符串
$replace = 'hahah';                           //替换后的字符串

//str_replace返回被替换后的字符串
$newStr = str_replace($search,$replace,$str,$count);
var_dump($newStr);//打印替换后的字符串 string hahah world how are you hEllo i am ok
var_dump($count);//打印替换次数 int 1
//不区分大小写
var_dump(str_ireplace('HeLLo',$replace,$str,$count)); // string hahah world how are you hahah i am ok
var_dump($count);//int 2

//strtr转换指定字符
                                              //hello
                                              //hahah h->h e->a l->a o->h
                                      // string hello world how are you hEllo i am ok
var_dump(strtr($str,$search,$replace));//string haaah whrad hhw ara yhu hEaah i am hk 单字符替换

//substr_replace 把字符串的一部分替换为另一个字符串
//注意：如果 start 参数是负数且 length 小于或者等于 start，则 length 为 0。
var_dump(substr_replace($str,$replace,0));
//length 正数 - 被替换的字符串长度  负数 - 表示待替换的子字符串结尾处距离 string 末端的字符个数。 0 - 插入而非替换