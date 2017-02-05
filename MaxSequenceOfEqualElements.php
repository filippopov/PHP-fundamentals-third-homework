<?php
$input = trim(fgets(STDIN));

$inputArr = explode(' ', $input);

$bestStart = 0;
$bestLen = 0;
$counter = 1;
for ($i = 0; $i < count($inputArr) - 1; $i++) {
    if ($inputArr[$i] == $inputArr[$i+1]) {
        $counter++;
        if ($bestLen < $counter) {
            $bestLen = $counter;
            $bestStart = $i - $bestLen + 2;
        }
    } else {
        $counter = 1;
    }
}

if ($bestLen == 0 && $bestStart == 0) {
    $bestLen = 1;
}

$result = array_slice($inputArr, $bestStart, $bestLen);

echo implode(' ', $result);
?>