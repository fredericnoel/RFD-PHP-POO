<?php

class Voiture extends Vehicule
{
    public $couleur;
    public $marque;
    public $capaciteReservoir;
    //public $qteCarburantRestant;
    //public $consommationInstantanee;

    public function __construct($color, $reservoir)
    {
        $this->couleur = $color;
        $this->capaciteReservoir = $reservoir;
    }

    public function afficherMessageALaCon()
    {
        echo "Message inutile";
    }

    public function peindreVoiture($coul)
    {
        $this->couleur = $coul;
    }

    public function calculerKmRestant($qteRestante, $consommation)
    {
        $reserve = $this->capaciteReservoir * 5 / 100;
        return ($qteRestante - $reserve) / $consommation * 100;
    }

    public function __destruct()
    {
        echo "Ich bin tot !";
    }
}