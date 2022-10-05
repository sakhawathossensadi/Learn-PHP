<?php
// in_array() return 0/1
// 0 returns when search value not present in array
// 1 returns when search value present in array

// array_search() return index/key
// return index or key if present
// return 0 if not found

$colors = ["Red", "Black", "Blue"];

echo in_array("Red", $colors) . "<br>";
echo in_array("Yellow", $colors) . "<br>";

if (in_array("Red", $colors)) {
    echo "Present" . "<br>";
}

if (!in_array("Yellow", $colors, true)) {
    echo "Not Present" . "<br>";
}

echo array_search("Blue", $colors) . "<br>";
echo array_search("Yellow", $colors) . "<br>";

$fruits = [
    'a' => 'apple',
    'b' => 'banana',
    'm' => 'mango'
];

echo array_search("mango", $fruits) . "<br>";
