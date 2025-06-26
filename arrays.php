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

$books = [
    ["title" => "Le Petit Prince", "author" => "Zaher", "year" => 1943],
    ["title" => "La Petite Princesse", "author" => "Zahra", "year" => 1944],
    ["title" => "Le Monde", "author" => "Monde", "year" => 1945],
];

echo $books[1]["author"] . PHP_EOL;

$beetles = ["singer" => "Zaher", "bassist" => "Momo", "drummer" => "Zozo", "guitarist" => "Toto",];

foreach ($beetles as $key => $beetle) {
    echo "$beetle joue le role de $key" . PHP_EOL;
}

$etudiants = ["Bob", "Alice", "Diane", "Charlie",];

sort($etudiants);

print_r($etudiants);

if (in_array("Charlie", $etudiants))
    echo "Charlie est bien présent dans la liste d'étudiants" . PHP_EOL;

