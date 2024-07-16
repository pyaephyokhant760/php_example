<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors",'1');

interface AnimalInterFace {
    public function eat();
    public function sleep();
}

interface DogInterFace {
    public function bark();
}

trait superPower {
    public $traid = "hello world";
    public function makeSpell() {
        echo "<h1> $this->traid Make Spell</h1>";
    }

    public function makeFoo() {
        echo "<h1>Make Foo</h1>";
    }
}

abstract class Animal implements AnimalInterFace {
    public $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function eat() {
        echo "eat";
    }

    public function sleep() {
        echo "sleep";
    }
}

class Dog extends Animal implements DogInterFace {

    use superPower;

    public function __construct(string $name) {
        parent::__construct($name);
    }
    public function bark() {
        echo "WooF!";
    }
}

$dog = new Dog('Aung Net');
$dog->eat();
$dog->sleep();
$dog->bark();
$dog->makeSpell();
$dog->makeFoo();