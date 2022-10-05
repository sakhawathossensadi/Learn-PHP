<?php
//array_merge() index or associative array

//index array
$a = [1, 2, 3];
$b = [4, 5, 6];

$newArray = array_merge($a, $b);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//associative array
$colors = ['a' => 'blue', 'r' => 'red'];
$fruits = ['d' => 'apple', 'e' => 'banana'];

$newArray = array_merge($colors, $fruits);

echo "<pre>";
print_r($newArray);
echo "</pre>";

$values1 = ['b' => 'blue', 'r' => 'red'];
$values2 = ['d' => 'apple', 'b' => 'banana'];

$newArray = array_merge($values1, $values2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//array_merge_recursive() multidimensional associative array

//associative array
$values1 = ['b' => 'blue', 'r' => 'red'];
$values2 = ['d' => 'apple', 'b' => 'banana'];

$newArray = array_merge_recursive($values1, $values2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//array_combine() index array


$a = ["jhon", "mike"]; //first array data will be key
$b = [34, 33]; // second array data will be value

//both array contains same number of element
$newArray = array_combine($a, $b);

echo "<pre>";
print_r($newArray);
echo "</pre>";
