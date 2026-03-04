<?php

class Human{
    public $nom;
    public $prenom;
    public $age;
    public $sexe;
    public $telephone;

    public function __construct($nom, $prenom, $age, $sexe, $telephone){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->telephone = $telephone;
    }

    public function afficher(){
        echo "nom : " . $this->nom . "\n";
        echo "prenom : " . $this->prenom . "\n";
        echo "age : " . $this->age . " ans\n";
        echo "sexe : " . $this->sexe . "\n";
        echo "telephone : " . $this->telephone . "\n";
    }
}