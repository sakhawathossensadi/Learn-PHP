<?php

$colors = ['red', 'black', 'white'];

// remove last element of array
array_pop($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";

//push element at the last of array
array_push($colors, "white");
array_push($colors, "blue", 'green');

echo "<pre>";
print_r($colors);
echo "</pre>";
