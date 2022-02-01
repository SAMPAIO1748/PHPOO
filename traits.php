<?php

// un trait est un regroupement de méthodes et attributs pouvant être importés dans une class
trait TPanier
{
    public $nbProduit = 1;
    public function affichageProduit()
    {
        return 'Affichage des produits !';
    }
}

trait TMembre
{
    public function affichageMembres()
    {
        return 'Affichage des membres !';
    }
}

class Site
{
    use TPanier, TMembre; // importation des traits dans la class
    // une class peut importé plusieurs traits.
}

$site = new Site;
echo $site->affichageProduit() . '<br>';
echo $site->affichageMembres() . '<br>';
echo $site->nbProduit . '<hr>';

var_dump($site);
echo '<br>';
var_dump(get_class_methods($site));
echo '<hr>';


//-----------------------------------------------------------------------------------------------------

trait A
{
    public function a()
    {
        return 'a';
    }
}

trait B
{
    use A; // Un trait peut importer un autre trait
    public function b()
    {
        return 'b';
    }
}

class Test
{
    use B;
}

$objet = new Test;
echo $objet->a() . '<br>';
echo $objet->b() . '<br>';
echo '<hr>';

//----------------------------------------------------------------------

// Si une classe déclare une méthode et qu'elle utilise un trait qui possède une méthode
// qui a le même nom alors la méthode déclarée dans la class aura la dessus.

trait MonTrait
{
    public function DireBonjour()
    {
        return 'Hello !';
    }

    public function DireAurevoir()
    {
        return 'Au revoir !';
    }
}

/*trait MonTrait2
{
    public function DireAurevoir()
    {
        return 'Good Bye';
    }
}
*/

// Si deux traits ont deux fonctions qui portent le même nom et si on importe ces deux traits
// dans un class alors il y a un erreur.

class MaClass
{
    use MonTrait;

    public function DireBonjour()
    {
        return 'Bonjour';
    }
}

$monObjet = new MaClass;
echo $monObjet->DireBonjour();
echo '<br>';
echo $monObjet->DireAurevoir();
echo '<hr>';

//------------------------------------------------------------------------------

// Il est possible de donner un alias a une méthode d'un trait

trait D
{
    public function saySomething()
    {
        return "Je suis le trait D";
    }
}

class DD
{
    use D {
        saySomething as sayWhoYouAre;
    }
}

$dd = new DD;
echo $dd->sayWhoYouAre();
echo '<br>';
echo $dd->saySomething();
