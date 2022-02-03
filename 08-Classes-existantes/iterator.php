<?php

// Pattern : Iterator
// Un (design) pattern permet de proposer une structure commune pour résoudre des problèmes similaires.
// Iterator permet de parcourir des éléments de natures différentes.

//---------------------------------------------------------------

$fruits = array('p' => "pomme", 'f' => 'fraise', 'c' => 'cerise');
$it1 = new ArrayIterator($fruits);
var_dump($it1);
echo '<br>';
print '<pre>';
print_r(get_class_methods($it1));
print '<pre>';
echo '<hr>';
$it1->rewind(); // replace le pointeur du fichier au début
while ($it1->valid()) { // valid = vérifie si le tableau contient d'autres entrées

    echo $it1->key() . ' - ' . $it1->current() . '<br>';
    $it1->next();

    // key = clé de l'entrée courante
    // current = entré courante
    // next = se déplace vers la prochaine entrée
}
echo '<hr>';
// doc ArrayIterator : https://www.php.net/manual/fr/class.arrayiterator.php
//------------------------------------------
$it2 = new DirectoryIterator('..');
$it2->rewind();
while ($it2->valid()) {

    echo $it2->key() . ' - ' . $it2->current() . '<br>';
    $it2->next();
}
echo '<hr>';

// doc DirectoryIterator : https://www.php.net/manual/fr/class.directoryiterator.php

//----------------------------------------------------
$it3 = new SimpleXMLIterator("fichier.xml", NULL, TRUE);
$it3->rewind();
while ($it3->valid()) {

    echo $it3->key() . ' - ' . $it3->current() . '<br>';
    $it3->next();
}
echo '<hr>';

// doc SimpleXMLIterator : https://www.php.net/manual/fr/class.simplexmliterator.php
