<?php

require 'Student.php';
require 'Teacher.php';

use student\Test as stuNameSpace;
use teacher\Test as teaNameSpace;

function hello()
{
    echo "function from institute" . "<br>";
}

$stu = new student\Test();
$stu->profile();

$tea = new teacher\Test();
$tea->profile();

hello();
student\hello();

$obj1 = new stuNameSpace();
$obj1->profile();

$obj2 = new teaNameSpace();
$obj2->profile();
