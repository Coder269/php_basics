<?php

$age = 17;
echo $age > 18 ? "Majeur" . PHP_EOL : "Mineur" . PHP_EOL;

$number = 17;
if ($number % 2 === 0)
    echo "$number est pair" . PHP_EOL;
else
    echo "$number est impair" . PHP_EOL;

$a = 8;
$b = 3;
$operation = "*";

switch ($operation) {
    case "+":
        echo $a + $b . PHP_EOL;
        break;
    case "-":
        echo $a - $b . PHP_EOL;
        break;
    case "*":
        echo $a * $b . PHP_EOL;
        break;
    case "/":
        echo $a / $b . PHP_EOL;
        break;
    default:
        echo "Operation inconnue";
}