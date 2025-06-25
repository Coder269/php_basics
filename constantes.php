<?php

define("TAUX_TVA", 0.2);
$prixHT = 100;
$prixTTC = $prixHT + (TAUX_TVA * 100);

echo $prixTTC;