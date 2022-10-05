<?php

function display($num)
{
    if ($num <= 5) {
        echo "number : " . $num . "<br>";
        display($num + 1); // recursive function call
    }
}

display(2);

function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return ($n * factorial($n - 1));
    }
}

$res = factorial(5);
echo "Factorial : " . $res . "<br>";
