<?php

class Vehicule
{
    private static $marque = "BMW"; // appartiens à la classe
    private $couleur = "noir"; // appartiens à l'objet

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getMarque() // il s'agit d'une méthode appartenant à l'objet qui retourne une propriété qui appartient à la classe
    {
        return self::$marque;
    }

    public function setCouleur($color)
    {
        $this->couleur = $color;
    }

    public function setMarque($brand)
    {
        self::$marque = $brand;
    }
}

$vehicule1 = new Vehicule;
echo "voiture 1 : " . $vehicule1->getMarque() . " " . $vehicule1->getCouleur();
echo '<hr>';
$vehicule2 = new Vehicule;
echo "voiture 2 : " . $vehicule2->getMarque() . " " . $vehicule2->getCouleur();

echo '<hr>';

$vehicule3 = new Vehicule;
$vehicule3->setCouleur('bleue'); // On ne modifie que l'objet véhicule 3 car couleur est une propriété de l'objet
echo "voiture 3 : " . $vehicule3->getMarque() . " " . $vehicule3->getCouleur();

echo '<hr>';

$vehicule4 = new Vehicule;
echo "voiture 4 : " . $vehicule4->getMarque() . " " . $vehicule4->getCouleur();

echo '<hr>';

$vehicule5 = new Vehicule;
$vehicule5->setMarque("Audi"); // On modifie la classe et donc tous les futurs objets émanant de cette classe.
echo "voiture 5 : " . $vehicule5->getMarque() . " " . $vehicule5->getCouleur();

echo '<hr>';

$vehicule6 = new Vehicule;
echo "voiture 6 : " . $vehicule6->getMarque() . " " . $vehicule6->getCouleur();
