<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/26
 * Time: 下午7:34
 */

$t = date("H");

switch ($t) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
        echo "hello";
        break;
    default:
        echo "world";
        break;
}