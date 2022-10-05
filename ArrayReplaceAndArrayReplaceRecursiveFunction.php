<?php

//array_replace() used in index or associative array
// array_replace_recursive() used in multidimensional associative array


//indexed array
$colors = ['red', 'blue', 'green'];
$fruits = ['apple', 'banana'];

// return new array
$newArray = array_replace($colors, $fruits);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//associative array
$colors = ['red', 'blue', 'a' => 'green'];
$fruits = ['a' => 'apple', 1 => 'banana'];

$newArray = array_replace($colors, $fruits);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//associative array
$array1 = array(
    'a' => array('red'),
    'b' => array('green', 'yellow'),
);

$array2 = array(
    'a' => array("black"),
    'b' => array("white"),
);

$newArray = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($newArray);
echo "</pre>";
