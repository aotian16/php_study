<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/27
 * Time: 上午11:11
 */

//$GLOBALS 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。
//$GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。

$a = 1;

function foo()
{
    echo $GLOBALS["a"];
}

foo();