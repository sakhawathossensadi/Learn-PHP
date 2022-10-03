<?php

//function parameter
function sum($a, $b = 100)
{
    $c = $a + $b;
    echo "Result : " . $c . "<br>";
}

//function argument
sum(1, 2);
sum(10, 10);
sum(100);
