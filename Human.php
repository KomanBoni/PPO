<?php

class Human{
    public $nom;
    public $prenom;
    public $age;
    public $sexe;
    public $poids;

    public function __construct($nom, $prenom, $age, $sexe, $poids){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->poids = $poids;
    }

    public function afficher(){
        echo "nom : " . $this->nom . "\n";
        echo "prenom : " . $this->prenom . "\n";
        echo "age : " . $this->age . " ans\n";
        echo "sexe : " . $this->sexe . "\n";
        echo "poids : " . $this->poids . " kg\n";
    }
}