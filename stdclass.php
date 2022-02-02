<?php

// Exemple de StdClass : 
$tab = array('orange', 'pomme', 'fraise');
$objet = (object) $tab; // transformation : un tableau devient un objet
var_dump($objet);

echo '<br>';


$objet2 = new stdClass;
$objet2->titre = "toto";
var_dump($objet2);

// Un objet fait parti de classe stdClass (classe standard de php) lorsque celui-ci est orphelin et n'a pas
// été instancié par un 'new'
// Ici l'objet1 n'est issue d'aucune classe en particulier.