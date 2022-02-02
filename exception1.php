<?php

// Exception est utilisé dans le cas d'erreur faite par l'utilisateur.

function recherche($tab, $elem)
{
    if (!is_array($tab)) {
        throw new Exception('Vous devez envoyer un array'); // Throw nous permet d'aller dans le bloc catch et
        // d'arreter l'execution du code
    }
    if (sizeof($tab) <= 0) {
        throw new Exception('Vous devez envoyer un array avec du contenu');
    }

    $position  = array_search($elem, $tab);
    return $position;
}

$liste = array();
$listes = array("Apple", "Samsung", "LG", "Sony");

try {
    // try : les essais sur la finction recherche
    echo recherche($listes, 'Apple') . "<br>";
    echo recherche($listes, 'Samsung') . "<br>";
    //echo recherche($liste, 'Bruce Wayne');
    echo recherche($tab, 'Roger') . "<br>";
    //echo 'toto';
} catch (Exception $exception) {
    // bloc de capture, on va capturer les exceptions comme Throw est utilisé avec new Execption, 
    // le traitement du code est stoppé et l'erreur est enregistré dans la variable $exception.
    // On peut mettre plusieurs catch d'affilé et try et catch sont toujours ensemble
    echo 'Erreur : ' . $exception->getMessage() . '<br>';
    var_dump($exception);
}

/**
 * - Exception est une classe prédéfinie. 
 * - Une exception est une erreur que l'on peut attraper grâce aux mots-clé try et catch.
 * - Throw permet d'arreter l'execution du code écrit dans le try et de rentrer dans le catch.
 * - Try et Catch permettent d'avoir 2 blocs d'instructions distinct.
 * */
