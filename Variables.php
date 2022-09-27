<?php
/*
variable declaration rules :
-> $variable
-> $_variable
-> $variable_variable
-> $variableName
-> $variable99
*/

$variable = "Hello World!";  //correct
$_variable = 12; //correct
$variable_variable = 12; //correct
$variableName = 13.22; //correct
$variable99 = 133; //correct

//$99variable = 12; //wrong
//$variab%le = 31.13; //wrong


$str = "Hello World!";
echo $str;
echo "<br>";
$num = 12.11;
echo $num;
