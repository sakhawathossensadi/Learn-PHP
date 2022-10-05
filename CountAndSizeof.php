<?php

$colors = ["Red", "Black"];

echo count($colors) . "<br>";

$data = [
    'colors' => ["Red", "White"],
    'cars' => ['Volvo', "Audi"],
];

// count for all internal array data
echo count($data, 1) . "<br>";
echo sizeof($data, 1) . "<br>";

//count for a specific internal array data
echo sizeof($data['colors'], 1) . "<br>";

$len = count($colors);

for ($i = 0; $i < $len; $i++) {
    echo $colors[$i], "<br>";
}
