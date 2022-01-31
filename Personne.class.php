<?php

class Personne
{
    private $prenom;
    private $nom;
    public function setPrenom($firstname)
    {
        if (is_string($firstname)) {
            // $this fait référence à la classe en cours c'est-à-dire Personne
            $this->prenom = $firstname;
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($name)
    {
        if (is_string($name)) {
            $this->nom = $name;
        }
    }

    public function getNom()
    {
        return $this->nom;
    }
}
