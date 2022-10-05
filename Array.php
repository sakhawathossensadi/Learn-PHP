<?php

$arr = array(10, 20, 30);

$colors = ['Red', 'Blue', 'Black', 'White'];

echo "Color : " . $colors[0] . "<br>";
echo "Total Colors : " . count($colors) . "<br>";

$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum = $sum + $arr[$i];
}

echo "Summation : " . $sum . "<br>";

echo "<pre>";
print_r($colors);
echo "</br>";
