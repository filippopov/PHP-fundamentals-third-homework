<?php
$input = trim(fgets(STDIN));

$inputArr = explode(' ', $input);

$sum = 0;

foreach ($inputArr as $value) {
    $number = (int) strrev($value);
    $sum += $number;
}

echo $sum;
?>