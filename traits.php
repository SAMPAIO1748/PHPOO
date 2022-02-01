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
