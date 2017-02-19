<?php
/**
 * Created by PhpStorm.
 * User: tds
 * Date: 2017/2/19 0019
 * Time: 21:00
 */
/*
 * HTML/数据库安全处理函数
 * 使用反斜线引用字符串
 * addslashes(string $str)
 * 反引用一个使用addslashes（）转义的字符串
 * stripslashes(sstring $str)
 * 将字符串中一些字符转换为HTML实体
 * htmlentities()和htmlspecialchars()
 * 将html实体转换为字符
 * html_entity_decode()和htmlspecialchars_decode()
 */

$str = "this's a test string";
var_dump(addslashes($str));//string 'this\'s a test string' 对特殊字符进行转移

$str1 = '<a href="www.baidu.com">百度</a>';
echo $str1;                    //百度
echo htmlspecialchars($str1);//<a href="www.baidu.com">百度</a>
echo htmlentities($str1);//<a href="www.baidu.com">百度</a>  等同于htmlspecialchars
echo htmlspecialchars_decode($str1);//百度
echo html_entity_decode($str1);//百度 等同于htmlspecialchars_decode

