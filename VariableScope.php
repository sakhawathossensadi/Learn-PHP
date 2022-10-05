<?php

function test()
{
    $a = 10; //local variable
}

// echo $a; //cannot use local variable $a outside test function


$b = 20; // global variable

function test1()
{
    global $b;
    echo "inside function: " . $b . "<br>";
    $b = $b + $b;
}

test1();
echo "outside : " . $b . "<br>";
