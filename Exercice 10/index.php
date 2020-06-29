<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Créer une fonction getNextYear() qui retourne l'année (sur 4 chiffres) qu'il sera l'année prochaine par rapport à la date actuelle.
*/

// Fonction à créer ici
//-------------------------------------------------------------------------

function getNextYear(){
    $newDate= new DateTime ('+1 year');
    return $newDate->format('Y');

    // return date('Y') + 1;
}



//-------------------------------------------------------------------------


// Doit afficher "2021" (si vous faites cet exercice en 2020 évidemment !)
dump( getNextYear() );