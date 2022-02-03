<?php
class Ecole
{
    public $nom = "Doranco";
    public $cp = 94;

    public function __clone()
    { // Un clone peut se faire en l'abscence de cette méthode. Elle s'execute en cas de clone demandé et s'applique sur l'objet cloné
        // (et non sur l'objet qui sert au clonage)

        $this->cp = 92;
    }
}

$ecole1 = new Ecole;
$ecole1->cp = 75;
var_dump($ecole1); // object[1]

echo '<br>';

$ecole2 = new Ecole;
var_dump($ecole2); // object[2]

echo '<br>';

$ecole3 = $ecole1; // transmission de la référence [1]
var_dump($ecole3); // object[1]
// Lorsque je modifie $ecole1 cela prend effet sur $ecole3 et vice-versa car $ecole1 et $ecole3 sont des références qui pointent vers le même
// object #1. Ils représentent le même objet.

echo '<br>';

$ecole3->cp = 91;
echo "Ecole 3 cp : " . $ecole3->cp . " . <br>";
echo "Ecole 1 cp : " . $ecole1->cp . " . <br>";

echo '<br>';

$ecole4 = clone $ecole2; // clone crée un objet et récupère les informations de $ecole2
var_dump($ecole4);
// $ecole4 et $ecole2 sont deux objets différents, si je modifie l'un, l'autre n'est pas modifié. 

echo '<br>';

$ecole5 = clone $ecole1;
var_dump($ecole5);
