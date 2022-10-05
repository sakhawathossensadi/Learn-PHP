<?php

/*
foreach($array as lits()){
    statement
}
*/

$emps = [
    [1, "Jhon", "Manager", "$40000"],
    [2, "Mike", "Salesman", "$20000"],
    [3, "Wick", "Driver", "$12000"],
];

foreach ($emps as list($id, $name, $designation, $salary)) {
    echo "Name : " . $name . " Designation : " . $designation . " Salary : " . $salary . "<br>";
}
