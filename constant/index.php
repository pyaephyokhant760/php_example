<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors",'1');

define("PI",4.14);
define("AUTHER","thi ha");
class Dog {
    const LEGS = 4;
    public static $name;
}
class MyConst {
    const PI = 3.14;
    public function sayClass() {
        echo __CLASS__ . " This is " . __LINE__ . " Methos " . __METHOD__;
    }
}

Dog::$name = "Aung net";
echo Dog::$name;
echo "<br>";
Dog::$name = "Mae Lone";
echo Dog::$name;
echo "<br>";
echo Dog::LEGS;
echo "<br>";
echo PI;
echo "<br>";
echo AUTHER;
echo "<br>";
$myConst = new MyConst;
$myConst->sayClass();