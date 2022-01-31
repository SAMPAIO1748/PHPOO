<?php

class Etudiant
{
    private $prenom;
    public function __construct($arg) // méthode appelée automatiquement lors du new. On ne peut pas déclarer 2 constructeurs en PHP. 
    {
        $this->setPrenom($arg);
    }

    public function setPrenom($arg)
    {
        $this->prenom = $arg;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$etudiant = new Etudiant('Robert');
echo 'Prenom : ' . $etudiant->getPrenom() . '<br>';
//$etudiant->__construct('Bernard');
$etudiant->setPrenom('Jean-Pierre');
var_dump($etudiant);
