<?php
declare(strict_types=1);

echo "Finding Aera Program" . "<br>";
echo "Enter Your Shape" . "<br>";
$shape = readline("Circle : c, Ratangle : r, Triangle : t =");


switch($shape) {
    case 'c':
        echo "Circle\n";
        areaForCircle();
        areaForRactangle();
        break;
    case 'r':
        echo "Ratangle\n";
        areaForCircle();
        break;
    case 't':
        echo "Triangle\n";
        areaForCircle();
        break;
    default:
        echo "no have";
}

function areaForCircle() {
    $pi = 3.43434343;
    $radius = readline("Enter Your radius : ");
    echo "Your Circle Area is $radius\n";
}

function areaForRactangle() {
    $width = readline('Width :');
    $height = readline('height : ');
    echo "Your Rantangle area is " . $width * $height;
}