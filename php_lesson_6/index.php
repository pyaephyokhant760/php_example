<?php

// $myArray = [
//     'Aung Aung','Maung Maung','Hla Hla',
// ];

// $key = array_search('Aung Aung', $myArray);
// echo $myArray[$key];

// function sun($numOne, $numTwo) {
//     return $numOne + $numTwo;
// }

// // $total = sun(45 , 45);

// // echo sun(45 , 45) . '<br>';
// // echo sun(60 , 45) . '<br>';

// function woof() {
//     echo 'hello world';
// }


// function sayHello($foo = 'Hello') {
//     echo $foo . '<br>';
// }

// // function myArgs() {
// //     $num1 = 0;
// //     $num2 = 1;
// //     echo $num1 . "and" . $num2;
// // }

// function myArgs() {
//     $num1 = func_get_arg(0);
//     $num2 = func_get_arg(1);
//     echo $num1 . " and " . $num2 .'<br>';
// }

// function testfun(...$args){
//     foreach($args as $arg) {
//         echo $arg . "<br>";
//     }
// }

// $say = function($name){
//     echo 'Hello' . $name;
// };

// $pyae = 'Hla Khant';
// $myclo = function($a) use ($pyae) {
//     return $a . $pyae;
// };

// function getNum() {
//     for ($i=0; $i < 20; $i++) { 
//         yield $i;
//     }
// }
// foreach(getNum() as $v) {
//     echo $v . '<br>';
// }

// echo $myclo("test") . "<br>";
// $say('world');
// testfun('aung aung','maung maung','Ba Ba');

// myArgs(1 , 2);
// sayHello();
// woof();

declare(strict_types=1);
function sayMyanmar(string $name,int $age) {
    echo $name . $age;
}

sayMyanmar("pyae" , 10);