<?php

$emps = [
    [1, "Jhon", "Manager", "$40000"],
    [2, "Mike", "Salesman", "$20000"],
    [3, "Jhon", "Driver", "$12000"],
];

echo $emps[0][1] . "<br>";
echo $emps[1][1] . "<br>";
echo $emps[2][1] . "<br>";

for ($i = 0; $i < count($emps); $i++) {
    for ($j = 0; $j < count($emps[$i]); $j++) {
        echo $emps[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>";
echo "<table border='2px' cellpadding='5px'>";
foreach ($emps as $emp) {
    echo "<tr>";
    foreach ($emp as $data) {
        echo "<td>" . $data . "</td>";
    }
    // echo "<br>";
    echo "</tr>";
}
echo "</table>";
