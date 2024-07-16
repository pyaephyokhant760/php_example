<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors",'1');

interface AnimalInterface {
    public function eat();
}
interface DogInterface {
    public function bark();
}

class Dog implements AnimalInterface,DogInterface {
    public $name;
    public function bark() {
        echo "$this->name woof!";
    }
    public function eat() {
        echo "eat";
    }
    public function __construct(string $name) {
        $this->name = $name;
    }
}

$dog = new Dog("shwe war");
$dog->bark();
$dog->eat();