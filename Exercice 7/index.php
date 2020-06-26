<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction removeDuplicates() qui prend 1 argument de type "array" (un tableau de nombres) et doit le retourner en ayant supprimé toutes les valeurs en doublons.
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher le tableau dans l'ordre "1,2,3"
dump( removeDuplicates( [1,2,2,3] ) );

// Doit afficher le tableau dans l'ordre "5,6,8"
dump( removeDuplicates( [5,6,5,6,5,6,8] ) );

// Doit afficher "Fatal error: Uncaught TypeError: Argument 1 passed to removeDuplicates() must be of the type array, string given"
dump( removeDuplicates( 'test' ) );