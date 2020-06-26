<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction sumOf() qui prend 2 arguments de type "int" et retourne le résultat de l'addition de ces 2 nombres.
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher "2"
dump( sumOf(1, 1) );

// Doit afficher "48"
dump( sumOf(16, 32) );

// Doit afficher "-4"
dump( sumOf(5, -9) );

// Doit afficher "Fatal error: Uncaught TypeError: Argument 1 passed to sumOf() must be of the type int, string given"
dump( sumOf('test', 89) );