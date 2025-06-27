<?php

//Validation et récuperation des données du formulaire

$errors = [];

//Cleaning with trim (deleting spaces) and htmlentities to prevent les failles XSS
//$_Post is an associative array and superglobal variable (every value is associated to its name in the form name attribute

$data = array_map('trim', $_POST);
$dataFinal = array_map('htmlentities', $data);

//Validation name
if (!isset($dataFinal["name"]) || empty($dataFinal["name"]))
    $errors[] = "Le nom est obligatoire";
elseif (strlen($dataFinal["name"]) > 20)
    $errors[] = "Le nom est trop long";
else
    $name = $dataFinal["name"];

//validation Email
if (!isset($dataFinal["email"]) || empty($dataFinal["email"]))
    $errors[] = "Email est obligatoire";
elseif (!filter_var($dataFinal["email"], FILTER_VALIDATE_EMAIL))
    $errors[] = "Le mail n'est pas valide";
else
    $email = $dataFinal["email"];


//Validating message
if (!isset($dataFinal["message"]) || empty($dataFinal["message"]))
    $errors[] = "Le champ message est obligatoire";
else
    $message = $dataFinal["message"];


//Validating CGU
if (!isset($dataFinal["cgu"]) || empty($dataFinal["cgu"]))
    $errors[] = "Accepter les CGU est obligatoire";

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Envoyé</title>
</head>
<body>
<?php
if (empty($errors)) {
    echo "<p>Merci $name pour votre message : $message</p>";
} else {
    echo "<h2>Votre demande n'a pas pu etre traitée : </h2>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
