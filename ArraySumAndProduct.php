<?php

//array_sum() (int or float values)
//array_product() (int or float values)

//index array
$arr = [10, 12, 134, 13, 31, 2];

$sum = array_sum($arr);

echo "Sum : " . $sum . "<br>";
echo "<br>";

$pro = array_product($arr);

echo "Product : " . $pro . "<br>";
echo "<br>";

$arr = [10.13, 12.13, 134, 13, 31, 2];

$sum = array_sum($arr);

echo "Sum : " . $sum . "<br>";
echo "<br>";

$pro = array_product($arr);

echo "Product : " . $pro . "<br>";
echo "<br>";

//associative array
$a = [
    'a' => 12.3,
    'b' => 10,
    'c' => 23.34
];

$sum = array_sum($a);

echo "Sum : " . $sum . "<br>";
echo "<br>";

$pro = array_product($a);

echo "Product : " . $pro . "<br>";
echo "<br>";
