<?php

//array_column()
//array_chunk()

$data = array(
    array(
        'id' => '7852',
        'name' => 'Sadi',
    ),
    array(
        'id' => '7853',
        'name' => 'Zoha',
    ),
    array(
        'id' => '7854',
        'name' => 'Rafa',
    ),
    array(
        'id' => '7855',
        'name' => 'Mim',
    ),
    array(
        'id' => '7856',
        'name' => 'Roni',
    )
);

$newArray = array_column($data, 'name');

echo "<pre>";
print_r($newArray);
echo "<pre>";

echo "<br>";

//'id' become key and 'name' become value
$newArray = array_column($data, 'name', 'id');

echo "<pre>";
print_r($newArray);
echo "<pre>";

echo "<br>";

//index array
$a = ['red', 'black', 'blue', 'orange', 'white'];

$newArray = array_chunk($a, 2);

echo "<pre>";
print_r($newArray);
echo "<pre>";

echo "<br>";

for ($i = 0; $i < count($newArray); $i++) {
    echo "Chunk " . $i + 1 . " data : ";
    for ($j = 0; $j < count($newArray[$i]); $j++) {
        echo $newArray[$i][$j] . " ";
    }
    echo "<br>";
}

//associative array
$ages = [
    'sadi' => 27,
    'zoha' => 28,
    'mim' => 26,
];

//3rd parameter is preserve value (it preserve key of associative array)
$newArray = array_chunk($ages, 2, 'true');

echo "<pre>";
print_r($newArray);
echo "<pre>";

echo "<br>";
