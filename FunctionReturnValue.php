<?php

function summation($a, $b)
{
    $c = $a + $b;

    return $c;
}

// return value from function 'summation' will store in variable $z
$z = summation(10, 20);

$result = $z * 2;

echo "Result : " . $result . "<br>";
