<?php
/**
 * Created by PhpStorm.
 * User: tongjin
 * Date: 2017/7/27
 * Time: 下午3:10
 */

class Person
{
    private $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHi()
    {
        echo "Hi, my name is $this->name, and age is $this->age";
    }
}

$p = new Person("Tom", 24);

$p->sayHi();