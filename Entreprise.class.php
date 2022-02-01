<?php

class Plombier
{
    public function getSpecialite()
    {
        return 'tuyaux, robinets, chauffe-eau, compteurs ... <hr>';
    }

    public function getHoraires()
    {
        return '8h/19h';
    }
}

class Electricien
{
    public function getSpecialite()
    {
        return 'pose de cables, disjoncteurs, tableaux ou armoires électriques ... <hr>';
    }

    public function getHoraires()
    {
        return '10h/18h';
    }
}

class Entreprise
{
    public $numero = 0;
    public function appelUnEmploye($employe)
    {
        $this->numero++;
        $this->{"monEmploye" . $this->numero} = new $employe;
        return $this->{"monEmploye" . $this->numero};
    }
}

//--------------
$entreprise = new Entreprise;

$entreprise->appelUnEmploye('Plombier');
echo $entreprise->monEmploye1->getSpecialite();
echo $entreprise->monEmploye1->getHoraires();

echo '<hr>';

$entreprise->appelUnEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialite();
echo $entreprise->monEmploye2->getHoraires();
