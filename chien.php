<?php

class Chien {

    public $race = "";
    public $age = 0;
    public $poids = 0;

    public function __construct($race, $age, $poids) {
        $this->race = $race;
        $this->age = $age;
        $this->poids = $poids;
    }

    public function vieillir() {
        $this->age++;
    }

    public function grossir($poids) {
        $this->poids += $poids;
    }

    public function maigrir($poids) {
        $this->poids -= $poids;
    }

    public function afficher() {
        echo "Race : " . $this->race . "\n";
        echo "Âge : " . $this->age . "\n";
        echo "Poids : " . $this->poids . "\n";
    }

}
?>
