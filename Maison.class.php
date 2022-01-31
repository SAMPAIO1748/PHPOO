<?php

class Maison
{
    private static $nbPiece = 7; // static appartiens à la classe
    public static $espaceTerrain = "500m2"; // appartiens à la classe
    public $couleur = "blanc"; // appartiens à l'objet
    const Hauteur = "10m"; // appartiens à la classe.
    private $nbPorte = 10; // appartiens à l'objet

    public static function getNbPiece()
    {
        return self::$nbPiece;
        // self récupère la classe à l'intérieur de la classe ici Maison
        // pour récupérer les attributs qui appartiennent à la classe et qui sont private
        // on devra faire appel à self.
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
        // $this récupère l'objet en cours de la classe
    }
}
// Tous ce qui appartiens à la classe peut être appelé sans instancier un nouvel objet de cette classe.
echo 'nbPiece : ' . Maison::getNbPiece() . '<hr>';
echo 'espaceTerrain : ' . Maison::$espaceTerrain . '<hr>';
echo 'hauteur : ' . Maison::Hauteur . '<hr>';

$maison = new Maison;

echo 'couleur : ' . $maison->couleur . '<hr>';
echo 'nombre de portes : ' . $maison->getNbPorte() . '<hr>';

// echo $maison->espaceTerrain; Ne peut pas être affiché car espaceTerrain est une propriété qui appartient à
// la classe et donc l'objet ne peut pas le lire.

// echo 'couleur : ' . Maison::$couleur; Ne peut pas être affiché car couleur est une propriété qui appartient
// à l'objet $maison et donc la classe Maison ne peut pas lire $couleur.

echo $maison->getNbPiece(); // devrais rien n'afficher mais PHP arrive quand même à se retrouver
// et donc à afficher la valeur

//echo Maison::getNbPorte(); ne peut pas l'afficher 
echo '<hr>';
echo  $maison::$espaceTerrain; // arrive à l'afficher
