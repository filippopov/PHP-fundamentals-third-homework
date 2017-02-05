<?php
$input = '11 12 13 3 14 4 15 5 6 7 8 7 16 9 8';

$inputArr = explode(' ', $input);

$resultArr = [];
for ($i = 0; $i < count($inputArr); $i++) {
    $numbers = array_slice($inputArr, $i + 1, count($inputArr) - ($i + 1));
    $minArray[0] = $inputArr[$i];
    $isCheck = true;
    $value = $inputArr[$i];
    $resultArr[$i][] = $inputArr[$i];
    while ($isCheck) {
        $isCheck = findSmallerNumber($value, $numbers);
        $value = $isCheck;
        if ($isCheck) {
            $numbers = array_slice($numbers, array_search($value, $numbers) + 1, count($numbers) - 1);
            var_dump($numbers);
            $resultArr[$i][] = $isCheck;
        }
    }
}

$maxArray = 0;
$maxIndex = 0;
foreach ($resultArr as $key => $value) {
    var_dump($value);
    if ($maxArray < count($value)) {
        $maxArray = count($value);
        $maxIndex = $key;
    }
}

$result = isset($resultArr[$maxIndex]) ? $resultArr[$maxIndex] : [];

echo implode(' ', $result);

function findSmallerNumber($from, $numbers = [])
{
    $minValue = isset($numbers[0]) ? $numbers[0] : 0;

    if ($minValue < $from) {
        return false;
    }

    foreach ($numbers as $value) {
        if ($value < $minValue && $value > $from) {
            $minValue = $value;
        }
    }

    return $minValue;
}

?>