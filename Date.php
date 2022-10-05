<?php

//Day d(01 to 31) j(1 to 31) S(sr, nd, rd or th)
//Month F(full month name like January, March) m(01, 02) M(Jan, Feb) n(1,2,3)
//Year Y(2009, 2010) y(90, 10)
//Week D(Mon) l(Monday) N(1 (week start from monday and last day Sunday)) w(1 (week start from sunday and last day saturday))

echo "Today is " . date("d") . "<br>";
echo "Today is " . date("j") . "<br>";
echo "Today is " . date("jS") . "<br>";

echo "<br>";

echo "Month is " . date("F") . "<br>";
echo "Month is " . date("m") . "<br>";
echo "Month is " . date("M") . "<br>";

echo "<br>";

echo "Year is " . date("Y") . "<br>";
echo "Year is " . date("y") . "<br>";

echo "<br>";

echo "Week is " . date("D") . "<br>";
echo "Week is " . date("l") . "<br>";
echo "Week is " . date("N") . "<br>";
echo "Week is " . date("w") . "<br>";

echo "<br>";

echo "Date " . date("d-m-Y") . "<br>";
echo "Date " . date("dS-m-Y") . "<br>";
echo "Date " . date("d-mM-Y") . "<br>";

echo "<br>";

echo "Day  " . date("z") . "<br>";

echo "<br>";

echo "Week of the year is " . date("W") . "<br>";

echo "<br>";

echo "Days of the month " . date("t") . "<br>";

echo "<br>";
//0 means not leap year
//1 means leap year
echo "Is this leap year " . date("L") . "<br>";
