<?php

for ($i = 0; $i < 10; $i++) {
    echo $i + 1 . PHP_EOL;
}

$compteur = 10;
while ($compteur > 0) {
    echo $compteur . PHP_EOL;
    $compteur--;
}

$forenames = ["Zaher", "Toto", "Titi"];
foreach ($forenames as $forename) {
    echo $forename . PHP_EOL;
}

$notes = [12, 15, 8, 17, 10];

$sum = 0;
foreach ($notes as $note) {
    $sum += $note;
}

$avergae = $sum / count($notes);

echo "The average is $avergae" . PHP_EOL;

$note = 3;

$result = match ($note) {
    0 => "Zero pointé!",
    1, 2 => "peux mieux faire!",
    3 => "Passable!",
    4 => "Bien!",
    5 => "Excellent!",
    default => "Note invalide!",
};

echo $result;