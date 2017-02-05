<?php
$input = trim(fgets(STDIN));

$inputArr = explode(' ', $input);

if (count($inputArr) == 2) {
    echo 'no';
    die();
}

if (count($inputArr) == 1) {
    echo 0;
    die();
}

for ($i = 1; $i < count($inputArr) - 1; $i++) {
    $firstPart = array_slice($inputArr, 0, $i);
    $secondPart = array_slice($inputArr, $i + 1, count($inputArr));
    if (array_sum($firstPart) == array_sum($secondPart)) {
        $index = $i;
    }
}

echo $indexValue = isset($index) ? $index : 'no';

?>