<?php
$a =10;
for ($i=0; $i >$a ; $i++) { 
    echo $i . '<br>';
}


$myArray = ['apple','orange','banana'];
// foreach ($myArray as $my) {
//    echo $my . '<br>';
// }

foreach ($myArray as $mykey => $myvalue) {
    echo "$mykey -> $myvalue" . '<br>';
}