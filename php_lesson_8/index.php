<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_error",1);

/**
 * Template
 */
abstract class Animal{
    public $name;
    public $color;

    public function __construct(string $name , string $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function eat() {
        echo "Woff";
    }
    public function __destruct() {
        echo "<h1>Animal Destruct!</h1>";
    }
}
/**
 * Dog Method
 */
class Dog extends Animal{
    public function __construct(string $name,string $color) {
        parent::__construct($name,$color);
    }
    public function bark() {
        echo "Woff";
    }
    public function __destruct() {
        parent::__destruct();
        echo "<h1>Dog Destruct!</h1>";
    }
    
}
/**
 * use case
 */
$dog = new Dog("aung","black");
    echo $dog->name;
    echo $dog->color;
    $dog->bark();


