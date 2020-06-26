<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction censor() qui prend 1 argument de type "string" et doit le retourner en remplaçant toutes les occurences des mots "idiot", "andouille" et "stupide" par "****".
*/

// Fonction à créer ici
//-------------------------------------------------------------------------





//-------------------------------------------------------------------------


// Doit afficher "Ce chat est ****"
dump( censor( 'Ce chat est stupide' ) );

// Doit afficher "Ce chien est une ****"
dump( censor( 'Ce chien est une ANDOUILLE !' ) );

// Doit afficher "Ce hamster est vraiment **** et **** !"
dump( censor( 'Ce hamster est vraiment stupide et idiot !' ) );

// Doit afficher "Fatal error: Uncaught TypeError: Argument 1 passed to censor() must be of the type string, array given"
dump( censor( [1,2,3] ) );