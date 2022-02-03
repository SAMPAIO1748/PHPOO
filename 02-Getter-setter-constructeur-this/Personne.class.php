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

$personne1 = new Personne;
$personne1->setPrenom("Roger"); // je modifie l'élément de l'objet via un setter (mutateurs) car l'élément est private
echo "La personne 1 a le prénom : " . $personne1->getPrenom() . "<br>"; // j'accède à l'élément de l'objet via un getter (accesseur)
// car l'élément est private

$personne1->setNom("Toto"); // je modifie l'élément de l'objet via un setter (mutateurs) car l'élément est private
echo "La personne 1 a le nom : " . $personne1->getNom() . "<br>"; // j'accède à l'élément de l'objet via un getter (accesseur)
// car l'élément est private
var_dump($personne1);

echo "<hr>";

$personne2 = new Personne;
echo $personne2->getPrenom() . "<br>"; // rien ne s'affiche car l'objet créer n'a pas de valeur à ses propriétés nom et prénom.
echo $personne2->getNom() . "<br>";
