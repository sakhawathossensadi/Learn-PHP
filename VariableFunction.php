<?php

function hello()
{
    echo "Hello world!";
}

//store function in variable
$func = "hello";
$func();
echo "<br>";


$summation = function ($a, $b) {
    $c = $a + $b;
    return $c;
};

$res = $summation(10, 20);
echo "Result : " . $res . "<br>";
