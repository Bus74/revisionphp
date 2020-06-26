<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction biggestOf() qui prend 2 arguments de type "int". Elle doit retourner le plus grand des deux.
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher "85"
dump( biggestOf(85, 45) );

// Doit afficher "147"
dump( biggestOf(85, 147) );

// Doit afficher "-8"
dump( biggestOf(-8, -25) );

// Doit afficher "Uncaught TypeError: Argument 1 passed to biggestOf() must be of the type int, string given"
dump( biggestOf('test', 45) );