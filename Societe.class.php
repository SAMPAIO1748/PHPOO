<?php
// Les méthodes magiques s'executent automatiquement (sans qu'on ai besoin de les appeler) lorsque certaines
// actions sont effectuées. L'action en question dépend de la méthode magique
class Societe
{
    public $adress;
    public $nom;

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
$societe1->nom = 'Roger'; // la proprété existe donc il ne renvoie pas à la méthode __set
$societe1->prenom = "Robert"; // la propriété prenom n'existe pas alors il renvoie vers la méthode __set() 
echo $societe1->ville; // la propriété n'existe pas donc il renvoie à la méthode __get
$societe1->bonjour(1, 2, 3); // la méthode n'existe pas donc il renvoie à la méthode __call
echo '<br>';
var_dump($societe1);
print '<pre>';
print_r($societe1);
print '<pre>';

/*****************************
 * Pour informations, d'autres méthodes magiques existe :
 * __callStatic($nom, $argument) : même effet que call pour les méthodes 'static'
 * __isset($nom) : se lance lors d'une condition isset ou empty sur une propriété
 * __desctruct() : se lance à la fin de l'exécution du script. Pratique pour fermer la connexion à la BDD ou fermer un fichier en écriture
 * __toString() : se lance lotrsqu'on tente d'afficher un objet par un echo.
 * il y a aussi : __wakeup(), __sleep(), __invoke(), __clone() ...  
 * 
 */
