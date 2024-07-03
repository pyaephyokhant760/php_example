<?php
// $studentOne = new stdClass();
// $studentOne->name = 'Aung Aung';
// $studentOne->address = 'Kume';

// $studentTwo = new stdClass();
// $studentTwo->name = 'Pyae Phyo Khant';
// $studentTwo->address = 'Mandalay';

// // echo $studentTwo->name;
// var_dump($studentOne);

$num = [56,58,59];
$numTwo = array(56,50,21);

// $num[] = 78;
// var_dump($num);



// associated array
$student = [
    'id' => 1,
    'address' => 'Yangon',
    'name' => 'Pyae Pyae'
];
// var_dump($student);
// echo $student['address'];


// Maxied Array
$d= [0 => 45, 'foo' => 'bar'];
// echo $d[0];

$tree = [
    [
        'id' => 1,
        'name' => 'mango'
    ],
    [
        'id' => 2,
        'name' => 'flower'
    ],
    [
        'id' => 3,
        'name' => 'rose'
    ],
    [
        'id' => 4,
        'name' => 'apple'
    ]
];

if (array_search(2,array_column($tree , 'id')) != false) {
    echo 'found';
}else{
    echo 'not found';
}

$id = array_column($tree , 'id');
array_multisort($id , SORT_DESC , $tree);
var_dump($tree);