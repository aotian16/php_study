<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/27
 * Time: 上午11:13
 */

//$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
//这个数组中的项目由 Web 服务器创建。不能保证每个服务器都提供全部项目；服务器可能会忽略一些，或者提供一些没有在这里列举出来的项目。

foreach ($_SERVER as $k => $v) {
    echo "key = $k";
    echo "<br>";
    echo "value = $v";
    echo "<br>";
    echo "<br>";
}