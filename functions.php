<?php
function afficherAccueil(): void
{
    echo "Bienvenue dans notre e-boutique" . PHP_EOL;
}

afficherAccueil();

function saluerUtilisateur(string $utilisateur): void
{
    echo "Bonjour $utilisateur" . PHP_EOL;
}

saluerUtilisateur("Zaher");

function totalPanier(int $quantite, float $prixUnitaire): float
{
    return $quantite * $prixUnitaire;
}

echo totalPanier(3, 19.99) . PHP_EOL;

function convertirEnUSD(float $montantEUR, float $taux = 1.1): float
{
    return $montantEUR * $taux;
}

echo convertirEnUSD(100) . PHP_EOL;

function moyenneAvis(array $avis): float
{
    return array_sum($avis) / count($avis);
}

$avis = [2, 3, 5, 4, 3.5, 4.5];

echo "The average satisfaction note is " . moyenneAvis($avis) . PHP_EOL;

function estConnecte(bool $etat): string
{
    return $etat ? "En ligne" : "Hors ligne";
}

echo estConnecte(true) . PHP_EOL;

function prixRemise(float $prixInitial, float $pourcentage): float
{
    return $prixInitial - ($prixInitial * ($pourcentage / 100));
}


echo "Le prix après remise est " . round(prixRemise(95.35, 10)) . PHP_EOL;
