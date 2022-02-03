<?php

class Compteur
{
    public static $nbInstanceClass = 0; // attribut qui appartient à la classe
    public $nbInstanceObjet = 0; // attribut qui appartient à l'objet
    public function __construct()
    {
        ++self::$nbInstanceClass; //  self::$nbInstanceClass + 1
        ++$this->nbInstanceObjet; //  $this->nbInstanceObjet + 1
    }
}

$c1 = new Compteur;
echo 'nbInstanceClass 1 : ' . Compteur::$nbInstanceClass;
echo '<br>';
echo 'nbInstanceObjet 1 : ' . $c1->nbInstanceObjet;
echo '<hr>';
$c2 = new Compteur;
echo 'nbInstanceClass 2 : ' . Compteur::$nbInstanceClass;
echo '<br>';
echo 'nbInstanceObjet 2 : ' . $c2->nbInstanceObjet;
echo '<hr>';
$c3 = new Compteur;
echo 'nbInstanceClass 3 : ' . Compteur::$nbInstanceClass;
echo '<br>';
echo 'nbInstanceObjet 3 : ' . $c3->nbInstanceObjet;
echo '<hr>';
$c4 = new Compteur;
echo 'nbInstanceClass 4 : ' . Compteur::$nbInstanceClass;
echo '<br>';
echo 'nbInstanceObjet 4 : ' . $c4->nbInstanceObjet;
echo '<hr>';
$c5 = new Compteur;

echo 'nbInstanceClass 5 : ' . Compteur::$nbInstanceClass;
echo '<br>';
echo 'nbInstanceObjet 5 : ' . $c5->nbInstanceObjet;
echo '<hr>';
