<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction sortArray() qui prend 1 argument de type "array" (un tableau de nombres) et doit le retourner en ayant trié les nombre dans l'ordre du plus petit au plus grand.
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher le tableau dans l'ordre "1,2,3,4,5,6,7,8,9"
dump( sortArray( [6,8,1,3,9,2,4,5,7] ) );

// Doit afficher le tableau dans l'ordre "145, 458, 698"
dump( sortArray( [458,145,698] ) );

// Doit afficher "Uncaught TypeError: Argument 1 passed to sortArray() must be of the type array, int given"
dump( sortArray( 56 ) );