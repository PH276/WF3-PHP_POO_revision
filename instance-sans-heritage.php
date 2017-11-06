<?php
class Employes{
    public $prenom;
    public $nom;
    public $salaire;
    public $contrat;
    public $mission;

    public function recevoirVirement(){

    }

}

class Etudiant{
    public $prenom;
    public $nom;
    public $cursus;
    public $planning;
    public $numeroEtudiant;


}

class Professeur extends Employes{}
class Technicien extends Employes{}
class Cadre extends Employes{}

class Eramus extends Etudiant{}
class Boursier extends Etudiant{}
class Apprenti extends Etudiant{}

class Interne extends Etudiant{
    public $employes;

    public function __construct(){
        $this -> employes = new Employes(); // instance sans héritage
    }
}


$interne = new Interne();
$interne -> employes -> recevoirVirement();
echo $interne -> prenom;
