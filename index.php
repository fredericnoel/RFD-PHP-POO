<?php
include "./classes/Vehicule.php";
include "./classes/Voiture.php";

$gerard = new Voiture("Jaune", 50);

$gerard->marque = "Renault Fuego";
$gerard->afficherMessageALaCon();

$gerard->peindreVoiture("Vert pomme");

$gerard->vitesse = 30;
$gerard->masse = 1075;

echo $gerard->calculerEnergieCinetique() . " Joules<br />";

echo $gerard->calculerKmRestant(30, 6);