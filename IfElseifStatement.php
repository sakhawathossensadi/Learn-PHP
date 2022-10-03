<?php

$per = 75;

if ($per >= 80 && $per <= 100) {
    echo "Merit" . "<br>";
} elseif ($per >= 70 && $per < 80) {
    echo "1st Division" . "<br>";
} elseif ($per >= 60 && $per < 70) {
    echo "2nd Division" . "<br>";
} else {
    echo "fail" . "<br>";
}
