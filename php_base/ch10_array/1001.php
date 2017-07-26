<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/26
 * Time: 下午7:38
 */

/*
 * 数组类型
 *
 * 1. 数值数组
 * 2. 关联数组
 * 3. 多维数组
 */

$endLine = "\n";

// 数值数组
$arr = array(1, 2, 3);

echo count($arr).$endLine; // count获取长度

// 遍历
for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i].$endLine;
}

// 关联数组

$arr1 = array(
    "tom"=>"male",
    "lucy"=>"female"
);

// 遍历

foreach ($arr1 as $name => $sex) {
    echo "$name is $sex".$endLine;
}