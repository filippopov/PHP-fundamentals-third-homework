<?php
$firstWords = trim(fgets(STDIN));
$secondWords = trim(fgets(STDIN));
$firstCounter = 0;
$secondCounter = 0;
$firstWordsArr = explode(' ', $firstWords);
$secondWordsArr = explode(' ', $secondWords);
$minLengthArr = min(count($firstWordsArr), count($secondWordsArr));

for ($i = 0; $i < $minLengthArr; $i++) {
    if ($firstWordsArr[$i] == $secondWordsArr[$i]) {
        $firstCounter++;
    } else {
        break;
    }
}

for ($i = 1; $i <= $minLengthArr; $i++) {
    if ($firstWordsArr[count($firstWordsArr) - $i] == $secondWordsArr[count($secondWordsArr) - $i]) {
        $secondCounter++;
    } else {
        break;
    }
}

$result = max($firstCounter, $secondCounter);
echo $result;
?>