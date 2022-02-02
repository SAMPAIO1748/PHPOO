<?php
function inclusionAutomatique($nomDeLaClasse)
{
    include_once($nomDeLaClasse . ".class.php");
    echo "On passe dans l'inclusion automatique ! <br>";
    echo "require($nomDeLaClasse.class.php); <br>";
}


//---------------------------------
spl_autoload_register('inclusionAutomatique'); // permet d'executer une fonction lorsque l'interpreteur voit passer un 'new' dans le code
//---------------------------------

/**
 * Le nom a coté du new est récupérer par spl_autoload_register
 * et transmet ce nom à la fonction inclusionAutomatique comme
 * étant le $nomDeLaClasse
 */
