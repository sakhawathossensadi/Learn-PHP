<?php

for ($i = 0; $i < 3; $i++) {
    echo "Outer loop value : " . $i + 1 . "<br>";
    for ($j = 0; $j < 3; $j++) {
        echo "Inner loop value : " . $j + 1 . "<br>";
    }
}
