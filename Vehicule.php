<?php
class Vehicule
{
    public $vitesseMax;
    public $nbreRoue;
    public $etat;
    public $couleur;
    public $marque;
    public $nbreplace;

    public function demarrer(){

    }

    public function turnRight(){

    }

    public function turnLight(){

    }

    public function ouvrir(){

    }

    public function fermer(){

    }

    public function allumerMusic(){

    }

}

class Voiture extends Vehicule
{
    public ;

    public function(){

    }
}

$mercedes = new Voiture();
$mercedes -> demarrer();
$mercedes -> turnRight();

$cadillac = new Voiture();
$cadillac -> uTurn();
