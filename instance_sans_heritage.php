<?php

class A
{
    public function direBonjour()
    {
        return 'Bonjour';
    }
}

class B // la classe B n'hérite pas de la classe A.
{
    public $maVariable;
    public function __construct()
    {
        $this->maVariable = new A; // je crée un objet A que je place dans l'attribut $maVariable de mon objet B.
    }
    public function uneMethode()
    {
        return $this->maVariable->direBonjour();
        // dans mon objet B ($this), je peux appeler des méthodes sur mon objet A ($this->maVariable)
    }
}

$b = new B;
echo $b->maVariable->direBonjour() . '<br>';
var_dump($b);
echo '<br>' . $b->uneMethode();
