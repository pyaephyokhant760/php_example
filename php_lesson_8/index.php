<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_error",1);


class Dog {
    public $name;
    public $color;
    public function bark() {
        echo "Woff";
    }
}
class cat {
    public $name;
    public $color;
    public function bark() {
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

