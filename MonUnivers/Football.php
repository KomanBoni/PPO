<?php

// Abstraction 
abstract class Sport {
    // Méthodes
    public function demarrer() {
        return "Le match demarre";
    }
    public function arreter() {
        return "Le match s'arrete";
    }
}

// class Football qui hérite de la classe Sport
class Football extends Sport {
    
    public $equipe;
    public $championnat;
    public $annee;

    // Constructeur
    public function __construct($equipe, $championnat, $annee) {
        $this->equipe = $equipe;
        $this->championnat = $championnat;
        $this->annee = $annee;
    }
}

// Exemple d'encapsulation en PHP (private $salaire)
class Joueur {
    // Propriétés
    public $nom;
    public $age;
    public $poste;
    private $salaire;

    
    public function __construct($nom, $age, $poste, $salaire) {
        $this->nom = $nom;
        $this->age = $age;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    
    public function jouer() {
        return "Je joue";
    }
    public function sentrainer() {
        return "Je m'entraine";
    }
    public function getSalaire() {
        return $this->salaire;
    }
}

// class Entraineur qui hérite de la classe Joueur
class Entraineur extends Joueur {
    public $nombreTitres;
    public function __construct($nom, $age, $poste, $salaire, $nombreTitres) {
        parent::__construct($nom, $age, $poste, $salaire);
        $this->nombreTitres = $nombreTitres;
    }

    public function dirigerEntrainement() {
        return "Je dirige l'entrainement";
    }
}

// class Partie qui a la meme méthode marquer mais avec des paramètres différents
class Partie {
    public function marquer($minute, $buteur = null) {
        if ($buteur === null) {
            return "But a la " . $minute . "e minute";
        }
        return "But de " . $buteur . " a la " . $minute . "e minute";
    }
}