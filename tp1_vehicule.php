<?php
require 'vehicule.php';

// Premier conducteur
$conducteur1 = new Vehicule('Renault', 90, 15000);
$conducteur1->AjoutKilometrage(3500);
$conducteur1->ajoutPuissance(110);
echo $conducteur1->affichageCaracteristique();

echo '<br><br>';

// Deuxième conducteur
$conducteur2 = new Vehicule('Peugeot', 110, 20000);
$conducteur2->AjoutKilometrage(1500);
echo $conducteur2->affichageCaracteristique();
//flaviant3
?>
