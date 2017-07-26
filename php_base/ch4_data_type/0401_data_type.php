<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/26
 * Time: 下午3:57
 */

// 数据类型
/*
 * 1. String
 * 2. Integer
 * 3. Float
 * 4. Boolean
 * 5. Array
 * 6. Object数据类型
 * 7. NULL数据类型
 *
 */

$str = "hello";
var_dump($str); // var_dump 打印出数据类型和值

$n = 1;
var_dump($n);

$f = 2.1;
var_dump($f);

$b = false;
var_dump($b);

$arr = array(1,2,3);
var_dump($arr);

class Dog
{
    var $name;
}

$dog = new Dog();
$dog->name = "wang";
var_dump($dog);

$dog = NULL;