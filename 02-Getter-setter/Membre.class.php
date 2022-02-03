<?php

/*******
 * Exercice créer la class Membre qui aura les attributs pseudo et mdp
 * Et créer les méthodes getter et setter associées à ses attributs.
 */

// Solution :
class Membre
{
    private $pseudo;
    private $mdp;

    public function setPseudo($arg)
    {
        if (is_string($arg)) {
            $this->pseudo = $arg;
        }
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setMdp($arg)
    {
        $this->mdp = $arg;
    }

    public function getMdp()
    {
        return $this->mdp;
    }
}

$membre1 = new Membre;
$membre1->setPseudo('René');
$membre1->setMdp('céline');
echo 'Pseudo : ' . $membre1->getPseudo() . '<br>';
echo 'Mdo : ' . $membre1->getMdp() . '<br>';
