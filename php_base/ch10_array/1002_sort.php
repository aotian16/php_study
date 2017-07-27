<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/27
 * Time: 上午10:54
 */

$endLine = "\n";

$arr = array(1, 4, 2, 3);

$arr1 = array(
    "tom"=>22,
    "lucy"=>25,
    "allen"=>19,
);

print_r($arr);

sort($arr); // 对数组进行升序排列

print_r($arr);

rsort($arr); // 对数组进行降序排列

print_r($arr);

print_r($arr1);

asort($arr1); // 根据关联数组的值，对数组进行升序排列

print_r($arr1);

ksort($arr1); // 根据关联数组的键，对数组进行升序排列

print_r($arr1);

arsort($arr1); // 根据关联数组的值，对数组进行降序排列

print_r($arr1);

krsort($arr1); // 根据关联数组的键，对数组进行降序排列

print_r($arr1);
