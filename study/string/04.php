<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/17 0017
 * Time: 17:18
 */
/*
 * 字符串截取函数
 * 从$str 中$start位置开始提取[length长度的字符串]
 * substr($str,int $start [, int length])
 * 查找字符串的首次出现
 * strstr（$str1,$str2）从$str1搜索$str2并从它开始截取到结束字符串
 * stristr($str1,$str2)功能同strstr,只是不区分大小写
 * 查找指定字符串在字符串中的最后一次出现
 * strrchr(string $str,mixed $search)
 */
$str = 'hello world how are you hello i am ok';//原始字符串
$search = 'hello';                            //要查找的字符串

var_dump(substr($str,0));//第三个参数默认不传的话，表示截取到字符串末尾 string 'hello world how are you hello i am ok'
var_dump(substr($str,5));//string ' world how are you hello i am ok'
var_dump(substr($str,6,5));//截取5个长度的字符串 string 'world'

var_dump(strstr($str,$search));//表示从找到hello的字符串位置开始截取到字符串结束 string 'hello world how are you hello i am ok'
var_dump(strstr($str,'how',true));//表示往查找到的位置前截取 string 'hello world ' true往前截取，false往后截取默认是fales

var_dump(stristr($str,$search));//不区分大小写的查找并截取

//strrchr 查找在字符串最后一次出现并截取
//strrops 查找字符串最后一次出现的位置
var_dump(strrpos($str,'hello'));
var_dump(strrchr($str,'hello'));//获取到要查找的字符串位置之后，从当前位置开始截取字符串