<?php

abstract class Joueur // une classe abstraite ne peut pas être instanciée.
{
    public function seConnecter()
    {
        return $this->EtreMajeur();
    }
    abstract public function EtreMajeur(); // les méthodes abstraites n'ont pas de contenu.
    abstract public function Devise(); // les méthodes abstraites n'ont pas de contenu.
    // Pour qu'une méthode soit abstraite il faut que la classe qui la contient soit abstraite.
}

class JoueurFr extends Joueur
{
    public function EtreMajeur() // Je suis obligé de redéfinir la méthode abstarite de ma class mère sinon j'ai une erreur 
    {
        return 18;
    }

    public function Devise() // Je suis obligé de redéfinir la méthode abstarite de ma class mère sinon j'ai une erreur 
    {
        return '€';
    }
}

class JoueurUs extends Joueur
{
    public function EtreMajeur() // Je suis obligé de redéfinir la méthode abstarite de ma class mère sinon j'ai une erreur
    {
        return 21;
    }

    public function Devise() // Je suis obligé de redéfinir la méthode abstarite de ma class mère sinon j'ai une erreur
    {
        return "$";
    }
}

//$joueur = new Joueur; // erreur, une class abstraite n'est pas instanciable !

$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter();
echo '<br>';
echo $joueurFr->Devise();
echo '<hr>';
$joueurUs = new JoueurUs;
echo $joueurUs->seConnecter();
echo '<br>';
echo $joueurUs->Devise();
