<?php

abstract class Vehicule // classe véhicule non instanciable car abstraite
{
    final public function demarrer()
    {
        return 'je demarre';
    }

    abstract public function carburant(); // la méthode est abstraite donc il faudra obligatoirement
    // redéfinir la méthode dans les class fille (Renault et Peugeot) sinon on aura une erreur.


    public function nombreTestObligatoire()
    {
        return 100;
    }
}

class Peugeot extends Vehicule
{
    public function carburant()
    {
        return 'essence';
    }

    public function nombreTestObligatoire()
    {
        return parent::nombreTestObligatoire() + 70;
    }
}

class Renault extends Vehicule
{
    public function carburant()
    {
        return 'diesel';
    }

    public function nombreTestObligatoire()
    {
        return parent::nombreTestObligatoire() + 30;
    }
}
// 1. Faire en sorte de ne pas avoir d'objet Vehicule.
// 2. Obligation pour la Renault et la Peugeot de posséder la même méthode demarrer() qu'un véhicule de base
// 3. Obligation pour la Renault de déclarer un carburant diesel et le Peugeot un carburant essence.
// 4. La Renault doit effectuer 30 tests de plus qu'un véhicule de base.
// 5. La Peugeot doit effectuer 70 tests de plus qu'un véhicule de base.
// 6. Effectuer les affichages necessaires.

$renault = new Renault;
echo "Renault " . $renault->demarrer() . '<br>';
echo "Renault " . $renault->carburant() . '<br>';
echo "Renault " . $renault->nombreTestObligatoire() . ' tests <br>';

echo '<hr>';

$peugeot = new Peugeot;
echo "Peugeot " . $peugeot->demarrer() . '<br>';
echo "Peugeot " . $peugeot->carburant() . '<br>';
echo "Peugeot " . $peugeot->nombreTestObligatoire() . ' tests <br>';
