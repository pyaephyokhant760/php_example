<?php

$name = 'Pyae Phyo Khant';
$age  = 19;

if($name == 'Pyae Phyo Khant' && $age == 21) {
    echo "name is Pyae Phyo Khant and age 21";
}else if($name == 'Poe Poe'and $age == 19) {
    echo 'name is Poe Poe and age 19';
}else if($name == 'Ppk' or $age == 19){
    echo 'name is ppk and age 19';
}else if($name != 'Pyae Phyo Khat' || $age != 19){
    echo 'name is Pyae Phyo Khant and age 19';
}