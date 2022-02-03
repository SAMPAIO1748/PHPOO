<?php
class Membre
{
    public $id = 15;
    public $pseudo;
    public $mdp;
    public function __construct()
    {
        echo 'Internaute! <hr>';
    }
    public function inscription()
    {
        return "je m'inscris <hr>";
    }
    public function seConnecter()
    {
        return "Je me connecte <hr>";
    }
}

class Admin extends Membre // extends = héritage, comme un include, comme si on copier coller tout le code de Membre dans Admin
{
    public function accesBackOffice()
    {
        return "Accés backoffice autorisé ! <hr>";
    }
}

$admin = new Admin;
echo $admin->seConnecter();
echo $admin->accesBackOffice();
echo $admin->id;

// public : accessible de partout
// protected : accessible seulement de la classe où cela est déclaré ou de la classe fille/enfant (cad celle qui hérite)
// prviate : accessible uniquement de la classe où cela a été déclaré.
