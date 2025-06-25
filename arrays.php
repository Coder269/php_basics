<?php

$fruits = [1 => "pomme", 2 => "banane", 3 => "orange",];

foreach ($fruits as $key => $fruit) {
    echo $fruit . PHP_EOL;
}

echo $fruits[0] . PHP_EOL; //error

$fruits[2] = "BANANE";
$fruits[] = "Kiwi";

print_r($fruits); //shows the value of any variable(mixed) in a human readable way, because echo by example does not show an array variable

$student = ["firstName" => "Zaher", "lastName" => "ABBAS", "birthDate" => "1997-01-01", "grade" => 12];

$student["grade"] = 13;

echo $student["firstName"] . " " . $student["lastName"] . " " . "a eu " . $student["grade"] . " " . "et né le " . $student["birthDate"] . PHP_EOL;