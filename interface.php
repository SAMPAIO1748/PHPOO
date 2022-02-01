<?php

interface Mouvement
{ // une interface est une liste de méthode (public) sans contenu qui permet de garantir que toutes les classes
    // qui implémente l'interface contiendra forcément les méthodes de l'interface avec le même nom (obligatoirement)
    public function deplacement();
}

class Bateau implements Mouvement // class Bateau extends Mouvement ne fonctionne pas
// pour récupérer une interface on utilise implements
{
    public function deplacement() // obligation de recréer les méthodes de l'interface qu'on implémente pour éviter une erreur.
    {
        return "Je me déplace";
    }
}

class Avion implements Mouvement
{
    public function deplacement()
    {
        return "Je vole";
    }
}

// new Mouvement; // erreur car une interface ne peux pas être instanciée (interdit !)

$bateau = new Bateau;
echo $bateau->deplacement();
echo '<br>';
$avion = new Avion;
echo $avion->deplacement();

// On peut implémenter plusieurs interfaces dans une class

interface iA
{
    public function test1();
}

interface iB
{
    public function test2();
}

class A implements iA, iB // on implémente 2 interfaces. Il faut cependant que celles-ci n'aient aucune méthode portant le même nom.
{
    public function test1()
    {
        return 'test1';
    }

    public function test2()
    {
        return 'test2';
    }
}

// héritages entre interfaces

interface iC
{
    public function test3();
}

interface iD
{
    public function test4();
}

interface iE extends iC, iD
// interface iE hérite des interfaces iC et iD cela veut dire que iE a accés aux méthodes test3 et test4
{
    public function test5();
}

class B implements iE
{

    // Pour ne générer aucune erreur il faut écrire les méthodes de iC et iD car iE hérite de ces interfaces

    public function test3()
    {
        return "test3";
    }

    public function test4()
    {
        return "test4";
    }

    public function test5()
    {
        return "test5";
    }
}

// combinaison : héritage de class + implementation d'interfaces

class C
{
}

class D extends C implements iA
// la classe D hérite de la classe C et la classe C implémente l'interface iA 
//( donc la classe D implémente l'interface iA)
{
    public function test1()
    {
        return 'test1';
    }
}
