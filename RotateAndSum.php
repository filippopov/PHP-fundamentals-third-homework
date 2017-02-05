<?php
$numbers = trim(fgets(STDIN));
$rotate = (int) trim(fgets(STDIN));

$numbersArr = explode(' ', $numbers);

$allNewArrays = [];
$newArr = [];
for ($i = 0; $i < $rotate; $i++) {
    $lastElement = array_pop($numbersArr);
    $newArr[] = $lastElement;
    $newArr = array_merge($newArr, $numbersArr);
    $allNewArrays[] = $newArr;
    $numbersArr = $newArr;
    $newArr = [];
}

$elements = isset($allNewArrays[0]) ? $allNewArrays[0] : [];
$countElements = count($elements);

$sumArray = [];

if ($countElements) {
    for ($i = 0; $i < $countElements; $i++) {
        foreach ($allNewArrays as $value) {
            $temp = isset($sumArray[$i]) ? $sumArray[$i] : 0;
            $sumArray[$i] = $value[$i] + $temp;
        }
    }
}

echo implode(' ', $sumArray);
?>