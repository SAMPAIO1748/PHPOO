<?php

function recherche($tab, $elem)
{
    if (!is_array($tab)) {
        die("Vous devez envoyer un TABLEAU ! MECHANT !"); // le die arrête le traitement du code
    }

    $postion = array_search($elem, $tab);
    return $postion;
}

//--------------------------------------------

$liste = array('Batman', 'Superman', 'Wonder Woman');

echo recherche($liste, 'Batman') . '<hr>';
echo recherche($liste, 'Wonder Woman') . '<hr>';
echo recherche($roger, 'Roger') . '<hr>';
// Comme $roger n'est pas un tableau le code dans le if s'applique et donc die s'éxecute 
// puis arrête le traitement du code. Donc même si du code est présent après il ne s'appliquera pas.
echo " Le code ne s'affiche plus ... Dommage ! ";
