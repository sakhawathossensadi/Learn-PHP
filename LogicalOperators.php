<?php
$a = 5;
$b = 5;

// && operator

if ($a > 3 && $b > 4) {
    echo "True" . "<br>";
}

// || operator
if ($a > 3 || $b > 6) {
    echo "True" . "<br>";
}

// ! operator
if (!($b > 6)) {
    echo "True" . "<br>";
}
// xor operator
// if any one condition true return true
// both condition true return false
// both condition false return false
