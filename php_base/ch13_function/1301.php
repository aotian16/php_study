<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/27
 * Time: 下午2:05
 */

$endLine = "\n";

function foo()
{
    echo "in foo"."\n";
}

function foo1($p)
{
    echo "in foo1. p = $p"."\n";
}

function foo2($p)
{
    return "in foo2. p = $p"."\n";
}

foo();
foo1(1);
echo foo2(2);