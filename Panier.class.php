<?php

class Panier
{
    public $nbProduit; // propriété ou un attribut

    public function ajouterArticle() // méthode
    {
        return 'L\'article a été ajouté.';
    }

    protected function retirerArticle()
    {
        return 'L\'article a été supprimé.';
    }

    private function affichageArticle()
    {
        return 'Voici les articles.';
    }
}

$panier1 = new Panier;
// new permet de faire une nouvelle instanciation de Panier.
var_dump($panier1);
//var_dump(get_class_methods($panier1));
echo '<br>';
$panier1->nbProduit = 5;
echo 'Panier 1 a ' . $panier1->nbProduit . ' produits <br>'; // la propriété est public donc acessible partout.
echo 'Dans le Panier 1 ' . $panier1->ajouterArticle() . '.<br>'; // la méthode est public donc accessible partout.
//echo 'Dans le Panier 1' . $panier1->retirerArticle() . ' .<br>'; la méthode est protected donc uniquement accessible dans la class où elle 
// a été déclarée ainsi que dans les classes héritières.
// echo 'Panier 1 : ' . $panier1->affichageArticle() . '<br>'; la méthode est private donc uniquement accessible dans la class où elle a 
// été déclarée. 

$panier2 = new Panier;
$panier2->nbProduit = 3;
echo 'Panier 2 a ' . $panier2->nbProduit . ' produits. <br>';
