<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction isPositive() qui prend 1 argument de type "int" et retourne "true" si ce dernier est positif, sinon "false".
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher "true"
dump( isPositive(85) );

// Doit afficher "false"
dump( isPositive(-6) );

// Doit afficher "true"
dump( isPositive(0) );

// Doit afficher "Fatal error: Uncaught TypeError: Argument 1 passed to isPositive() must be of the type int, string given"
dump( isPositive('test') );