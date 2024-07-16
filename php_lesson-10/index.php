<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors",'1');
 

/**
 * Constructor & Destructor
 * Static and Dynamic Object
 */


 class Dog {
    public $name;

    /**
     * Megic Methods
     */
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function bark() {
        echo "$this->name Woof!";
    }

    /**
     * Destruct
     */
    public function __destruct() {
        echo "<h1>Destruct!</h1>";
    }
 }

 $dog = new Dog('Aung Net');
 echo $dog->name;
 $dog->bark();
 $dog1 = new Dog('Dog 1');
 $dog1->bark();