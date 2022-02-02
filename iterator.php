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
$it1->rewind();
while ($it1->valid()) {

    echo $it1->key() . ' - ' . $it1->current() . '<br>';
    $it1->next();
}
echo '<hr>';

//------------------------------------------
$it2 = new DirectoryIterator('..');
$it2->rewind();
while ($it2->valid()) {

    echo $it2->key() . ' - ' . $it2->current() . '<br>';
    $it2->next();
}
echo '<hr>';

//----------------------------------------------------
