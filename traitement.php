<?php

$name = $_POST["name"];
$message = $_POST["message"];

echo "Merci $name pour votre message!" . PHP_EOL;

if ($message == "") {
    echo "Le message est vide" . PHP_EOL;
}