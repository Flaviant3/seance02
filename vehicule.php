<?php

class Vehicule
{
    public $marque;
    public $puissance;
    public $kilometrage;

    /**
     * @param $marque
     * @param $puissance
     * @param $kilometrage
     */
    public function __construct($marque, $puissance, $kilometrage)
    {
        $this->marque = $marque;
        $this->puissance = $puissance;
        $this->kilometrage = $kilometrage;
    }

    public function affichageCaracteristique() {
        return 'Marque : '.$this->marque.'<br> Puissance : '.$this->puissance.'<br> Kilométrage : '.$this->kilometrage;
    }

    public function ajoutPuissance($nouvellePuissance) {
        $this->puissance = $nouvellePuissance;
    }

    public function AjoutKilometrage($nouveauKilometrage){
        $this->kilometrage += $nouveauKilometrage;
    }
}
//flaviant3
?>
