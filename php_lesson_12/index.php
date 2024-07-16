<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors",'1');

class Cat {
    public $name;
    private $claws;
    protected $food;
    public function __construct(string $name,bool $claws,array $food) {
        $this->name = $name;
        $this->claws = $claws;
        $this->food = $food;
    }
    public function isClaw() {
        if ($this->claws == true) {
            echo "this is true";
        }else{
            echo "this is not true";
        }
    }
    public function sayFood() {
        var_dump($this->food);
    }
}

class Kitty extends Cat {
    public function __construct(string $name,bool $claws,array $food) {
       parent::__construct($name,$claws,$food);
    }
}

$cat = new Cat('shwe war',false ,['rice','apple']);
echo $cat->name . "<br>";
$cat->isClaw() . "<br>";
$cat->sayFood();
