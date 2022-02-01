<?php

class Vehicule
{
    public function demarrer()
    {
        return 'je demarre';
    }

    public function carburant()
    {
        return;
    }

    public function nombreTestObligatoire()
    {
        return 100;
    }
}

class Peugeot
{
}

class Renault
{
}

// 1. Faire en sorte de ne pas avoir d'objet Vehicule.
// 2. Obligation pour la Renault et la Peugeot de posséder la même méthode demarrer() qu'un véhicule de base
// 3. Obligation pour la Renault de déclarer un carburant diesel et le Peugeot un carburant essence.
// 4. La Renault doit effectuer 30 tests de plus qu'un véhicule de base.
// 5. La Peugeot doit effectuer 70 tests de plus qu'un véhicule de base.
// 6. Effectuer les affichages necessaires. 