<?php

class A
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A
{
    public function calcul()
    {
        $nb = parent::calcul(); // Surchage ou override, permet de récupérer une fonction de la classe hérité
        // pour ensuite y ajouter du code complémentaire
        if ($nb <= 100) {
            return  $nb . " est inférieur ou égal à 100.";
        } else {
            return $nb . " est supérieur à 100.";
        }
    }

    public function autreCalcul()
    {
        $nb = parent::calcul(); // Il est possible d'atteindre une méthode de mon parent, même si il n'y a pas de redéfinition 
        // (c'est-à-dire que la méthode ne s'appelle pas comme la méthode du parent)
        $nb = $nb + 10;
        return $nb;
    }

    public function pasDeCalcul()
    {
        $nb = parent::calcul();
        return $nb;
    }
}

$objetB = new B;
echo $objetB->calcul();
echo "<br>";
echo $objetB->autreCalcul();
echo "<br>";
echo $objetB->pasDeCalcul();
