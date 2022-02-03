<?php
// créer des deux fonctions villes et deux fonctions pays dans des namespaces A et B.

namespace A { // On peut remplacer le ; par des {}
    // il vaut mieux privilégier le ;

    function pays()
    {
        return "France";
    }

    function ville()
    {
        return 'Paris';
    }
}


namespace B {


    function pays()
    {
        return 'Belgique';
    }

    function ville()
    {
        return 'Bruxelles';
    }
}


// echo B\ville(); Erreur, il ne faut pas mettre de code après avoir défine des espaces de noms.
// il nous faut donc créer un autre fichier, un fichier d'appel.
