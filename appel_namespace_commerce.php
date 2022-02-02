<?php
require_once('namespace_commerce.php'); // on appel le fichier namespace_commerce.php
use Commerce2, Commerce3, Commerce1; // permet de dire quels namespace on veut importer du fichier namespace_commerce.php

$produit2 = new Commerce2\Produit; // Il ne faut pas oublier \ et le namespace sinon, la classe ne sera identifée
var_dump($produit2);
echo '<br>';
$produit3 = new Commerce3\Produit;
var_dump($produit3);
echo '<br>';
// Exercice créer $panier basé sur la class Panier
// Créer l'objet $commande basé sur la class Commande

$panier1 = new Commerce3\Panier;
var_dump($panier1);
echo '<br>';
$commande = new Commerce1\Commande;
var_dump($commande);

// Les namespaces (ou espace de nom) permetteen tde ranger des classes qui pourront aisni avoir des noms identiques
// Cela est très pratique lors d'un travail collaboratif pour éviter que des fonctions ou des classes soit identiques
// et causer des problèpmes au code du projet.
