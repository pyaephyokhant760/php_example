<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_error",1);

abstract class Animal{
    public $name;
    public $color;
}
class Dog extends Animal{
    public function bark() {
        echo "Woff";
    }
}
class cat extends Animal{
    public function bark() {
        echo "Woff";
    }
    public function eat() {
        echo "Woff";
    }
}

$dog = new Dog();
    $dog->name = 'Aung Aung';
    echo $dog->name;
    $dog->color = 'black';
    echo $dog->color;
    $dog->bark();

$cat = new cat();
    $cat->name = 'Pu Si';
    echo $cat->name;
    $cat->color = 'black';
    echo $cat->color;
    $cat->bark();

$dog2 = new Dog();
$cat2 = new cat();
