<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction iReturnMyArgument() qui retourne son argument.
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher "55"
dump( iReturnMyArgument(55) );

// Doit afficher "test"
dump( iReturnMyArgument('test') );

// Doit afficher l'array
dump( iReturnMyArgument(['Pomme', 'Cerise', 'Citron']) );