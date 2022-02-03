<?php
class Vehicule
{
    private $litresEssence;
    public function setLitresEssence($litres)
    {
        if (is_int($litres) && $litres <= 50) {
            $this->litresEssence = $litres;
        }
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
}

class Pompe
{
    private $litresEssence;
    public function setLitresEssence($litres)
    {
        if (is_int($litres)) {
            $this->litresEssence = $litres;
        }
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
    public function donnerEssence(Vehicule $vehicule)
    {
        $this->setLitresEssence($this->getLitresEssence() - (50 - $vehicule->getLitresEssence()));
        //                               800              -  50 - 5 = 755
        $vehicule->setLitresEssence(50);
    }
}

$vehicule1 = new Vehicule;
$vehicule1->setLitresEssence(5);
echo 'Le véhicule 1 a : ' . $vehicule1->getLitresEssence() . " litres d'essence <hr>";

$pompe = new Pompe;
$pompe->setLitresEssence(800);
echo 'La pompe possede : ' . $pompe->getLitresEssence() . " litres d'essences <hr>";

$pompe->donnerEssence($vehicule1);

echo 'Après ravitaillement, le véhicule 1 a : ' . $vehicule1->getLitresEssence() . " litres d'essence <hr>";
echo 'Après ravitaillemnt, la pompe a : ' . $pompe->getLitresEssence() . " litres d'essences <hr>";
