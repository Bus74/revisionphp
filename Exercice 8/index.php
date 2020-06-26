<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction biggestOf() qui prend 1 argument de type "array" (un tableau de nombres) et doit retourner le plus grand nombre que contient ce dernier.
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher "45"
dump( biggestOf( [45, 8, 12] ) );

// Doit afficher "12456"
dump( biggestOf( [1958, 12456, 12] ) );

// Doit afficher "0"
dump( biggestOf( [-56, 0, -12896] ) );

// Doit afficher "Fatal error: Uncaught TypeError: Argument 1 passed to biggestOf() must be of the type array, string given"
dump( biggestOf( 'test' ) );