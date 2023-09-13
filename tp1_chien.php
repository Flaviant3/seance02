<?php
require "chien.php";

// Création des deux chiens
$chien1 = new Chien("Labrador", 2, 15);
$chien2 = new Chien("Golden Retriever", 3, 20);

// Affichage des données des chien1 et chien2
echo "Chien 1 :\n";
echo "Race : " . $chien1->race . "<br>";
echo "Âge : " . $chien1->age . "<br>";
echo "Poids : " . $chien1->poids . "<br>";
echo "\n"."<br>";
echo "Chien 2 :\n";
echo "Race : " . $chien2->race . "<br>";
echo "Âge : " . $chien2->age . "<br>";
echo "Poids : " . $chien2->poids . "<br>";
echo "\n"."<br>";

// Le chien1 prend un an de plus
$chien1->vieillir();
echo "Chien 1 :\n";
echo "Race : " . $chien1->race . "<br>";
echo "Âge : " . $chien1->age . "<br>";
echo "Poids : " . $chien1->poids . "<br>";
echo "\n"."<br>";

// Le chien2 mange et grossit de 1,5Kg
$chien2->grossir(1.5);
echo "Chien 2 :\n";
echo "Race : " . $chien2->race . "<br>";
echo "Âge : " . $chien2->age . "<br>";
echo "Poids : " . $chien2->poids . "<br>";
echo "\n"."<br>";

// Le chien1 perd 2kg
$chien1->maigrir(2);
echo "Chien 1 :\n";
echo "Race : " . $chien1->race . "<br>";
echo "Âge : " . $chien1->age . "<br>";
echo "Poids : " . $chien1->poids . "<br>";
echo "\n";
?>
