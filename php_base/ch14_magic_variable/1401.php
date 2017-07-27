<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/27
 * Time: 下午2:25
 */

function println($s)
{
    echo $s."\n";
}

println("line = ".__LINE__);
println("file = ".__FILE__);
println("dir  = ".__DIR__);

function foo()
{
    println("func  = ".__FUNCTION__);
}

foo();

// 还有method, class, namespace, trait