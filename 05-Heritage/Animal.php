<?php

class Animal
{
    protected function deplacement()
    {
        return 'je me déplace';
    }

    public function manger()
    {
        return "je mange chaque jour";
    }
}

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return 'je suis un élephant et ' . $this->deplacement();
    }
}

class Chat extends Animal
{

    public function quiSuisJe()
    {
        return 'je suis un chat';
    }

    public function manger()
    {
        return 'je mange comme un chat';
    }
}

$elephant = new Elephant;
echo $elephant->quiSuisJe() . '<br>';
echo $elephant->manger() . '<hr>';

$chat = new Chat;
echo $chat->quiSuisJe() . '<br>';
echo $chat->manger() . '<hr>';

// Lorsque l'on appelle une méthode sur un objet, l'interpreteur cherche d'abord dans la classe
// dont l'objet est issue avant d'aller voir dans la classe mère en cas d'héritage.

// echo $chat->deplacement(); ne peut pas invoquer la méthode car elle est protected donc invocable uniquement
// dans la classe mère ou la classe fille
