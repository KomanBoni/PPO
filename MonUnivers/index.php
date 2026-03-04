<?php

require_once 'Football.php';

// Abstraction + Héritage 
$football = new Football("PSG", "Ligue 1", 2024);
echo $football->demarrer() . "\n";
echo $football->arreter() . "\n";
echo $football->equipe . " - " . $football->championnat . "\n\n";

// Encapsulation 
$joueur = new Joueur("Mbappé", 25, "Attaquant", 500000);
echo $joueur->jouer() . "\n";
echo $joueur->sentrainer() . "\n";
echo "Salaire (via getter) : " . $joueur->getSalaire() . "\n\n";

// Héritage 
$entraineur = new Entraineur("Deschamps", 55, "Entraineur", 200000, 2);
echo $entraineur->dirigerEntrainement() . "\n";
echo $entraineur->jouer() . "\n";
echo "Titres : " . $entraineur->nombreTitres . "\n\n";

// Polymorphisme 
$partie = new Partie();
echo $partie->marquer(67) . "\n";
echo $partie->marquer(89, "Griezmann") . "\n";
