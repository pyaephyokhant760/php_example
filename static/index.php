<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors",'1');

class Dog {
    public $name;
    public $color;
    public static $foo;
    public function __construct(string $name,string $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public static function bite() {
        self::$foo = "foo";
        echo "<h1>Bite Seriously</h1>";
    }
    public function __destruct() {
        echo "<h1>" . __CLASS__ . "Object Destruct!</h1>";
    }
}

Dog::bite();
echo Dog::$foo;


// $dog = new Dog("Aung Aung","Black");
// echo $dog->color ."<br>";
// $dog2 = new Dog('Puccy',"White");
// echo $dog2->name;
