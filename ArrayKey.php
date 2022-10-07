<?php

//array_key()
//array_key_first() 7.3.0
//array_key_last() 7.3.0
//array_key_exists()
//key_exists()

$arr = ['a' => 'apple', 'b' => 'banana', 'c' => 'coconut'];

$newArray = array_keys($arr);

echo "<pre>";
print_r($newArray);
echo "<pre>";
echo "<br>";

echo "First key : " . array_key_first($arr) . "<br>";
echo "Last key : " . array_key_last($arr) . "<br>";
echo "key exist : " . array_key_exists('a', $arr) . "<br>";
echo "key exist : " . key_exists('e', $arr) . "<br>";

echo "<br>";

$key = 'a';

if (key_exists($key, $arr)) {
    echo "Value : " . $arr[$key] . "<br>";
} else {
    echo "Key does not exist" . "<br>";
}

echo "<br>";

$key = 'z';

if (key_exists($key, $arr)) {
    echo "Value : " . $arr[$key] . "<br>";
} else {
    echo "Key does not exist" . "<br>";
}
