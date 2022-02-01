<?php
// Les méthodes magiques s'executent automatiquement (sans qu'on ai besoin de les appeler) lorsque certaines
// actions sont effectuées. L'action en question dépend de la méthode magique
class Societe
{
    public $adress;

    public function __construct()
    {
    }
    // __construct est une méthode magique qui s'execute quand on instancie un nouvel objet
    // (quand on fait new Societe)
    // Toutes les méthodes magiques commencent par __ (2 tiret du 8)

    public function __set($nom, $valeur) // se déclenche uniqument en cas de tentative d'affectation sur une propriété qui n'existe pas dans la class
    {
        echo "La propriété " . $nom . " n'existe pas, la valeur " . $valeur . " n'a donc pas été affecté ! Par Bleu! <br>";
    }


    public function __get($nom) // se déclence uniquement en cas de tentative d'affichage sur une propriété qui n'existe pas dans la class
    {
        echo "La propriété " . $nom . " n'existe pas, on peut donc pas l'afficher ! Par Bleu ! <br> ";
    }

    public function __call($nom, $argument) // se déclenche uniquement en cas de tentative d'exécution d'une méthode qui n'existe pas dans la class
    {
        echo "Tentative d'exécuter une méthode " . $nom .  " qui n'existe pas <br> Les arguments étaient " . implode('-', $argument) . '<hr>';
    }
}

$societe1 = new Societe;
$societe1->nom = 'Roger';
echo $societe1->ville; // la propriété n'existe pas donc il n'affiche rien
$societe1->bonjour(1, 2, 3);
echo '<br>';
var_dump($societe1);
