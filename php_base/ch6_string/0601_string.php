<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/26
 * Time: 下午4:48
 */

$str = "hello world!";
$endLine = "\n";

echo $str.$endLine;

echo $str."I am phper.".$endLine;

echo strlen($str).$endLine; // 字符串长度

echo strpos($str, "wor").$endLine; // 字符串出现的位置