<?php

//      0        1      2        3       4
$a = ['jhon', 'mike', 'hob', 'shawn', 'randy'];
//     -5       -4      -3     -2       -1

$newArray = array_slice($a, 1, 3);

echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_slice($a, -2, 2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// 4th parameter true means it preserve original array index
$newArray = array_slice($a, -3, 2, true);

echo "<pre>";
print_r($newArray);
echo "</pre>";


$fruits = ['d' => 'apple', 'e' => 'banana', 42 => 'mango'];

$newArray = array_slice($fruits, 1, 2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_slice($fruits, 1, 2, true);

echo "<pre>";
print_r($newArray);
echo "</pre>";
