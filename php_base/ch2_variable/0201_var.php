<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/26
 * Time: 下午2:26
 */

// 变量作用域有4种
// 1. local
// 2. global
// 3. static
// 4. parameter

$a = 1; // global

function foo($p) // parameter
{
    global $a; // global需要这样引用
    $b = 2; // local

    echo "a = $a \n";
    echo "b = $b \n";
    echo "p = $p \n";

    $aa = $GLOBALS['a']; // global也可以用$GLOBALS来引用

    echo "aa = $aa \n";
}

foo(3);

function myTest()
{
    static $x=0; // static 可以保留
    echo "x = $x \n";
    $x++;
}

myTest();
myTest();