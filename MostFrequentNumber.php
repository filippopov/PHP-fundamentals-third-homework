<?php
$input = trim(fgets(STDIN));

$inputArr = explode(' ', $input);

$allWords = [];
for ($i = 0; $i < count($inputArr); $i++) {
    if (! isset($allWords[$inputArr[$i]])) {
        $allWords[$inputArr[$i]] = 1;
    } else {
        $allWords[$inputArr[$i]] += 1;
    }
}

asort($allWords);
$maxValue = PHP_INT_MIN;
$result = PHP_INT_MIN;
foreach ($allWords as $key => $value) {
    if ($maxValue < $value) {
        $maxValue = $value;
        $result = $key;
    }
}

echo $result;
?>