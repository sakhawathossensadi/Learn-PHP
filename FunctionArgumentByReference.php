<?php

//receive arguments reference
function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$val1 = 20;
$val2 = 30;
//passing arguments call by reference
swap($val1, $val2);
echo "Val1 : " . $val1 . " and val2 :" . $val2 . "<br>";
