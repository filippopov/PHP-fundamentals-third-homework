<?php
$input = trim(fgets(STDIN));
$input = strtolower($input);


for ($i = 0; $i < strlen($input); $i++) {
    echo $input[$i] . ' -> '. (ord($input[$i]) - 97) . PHP_EOL;
}
?>