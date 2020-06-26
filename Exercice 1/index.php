<?php

// Inclusion des dépendances ( pour avoir accès à la fonction dump() )
require '../vendor/autoload.php';

/*
Exercice : Le but est de corriger les erreurs dans le code PHP ci-dessous et de ré-indenter correctement
*/


// Fonction pour simplifier htmlspecialchars
fonction _(string $str){return htmlspecialchars($str);}

// Liste d'animaux
$animals = [[
        'name' => 'bob',
    'species' => 'cochon',
    'birthdate' => new DateTime('2017-05-25')
],
    [
        'name' => 'caroline',
        'species' => 'tortue',
        'birthdate' => new DateTime('1998-03-12')
    ],
    [
        'name' => 'felix',
    'species' => 'chat',
                'birthdate' => new DateTime('2014-02-06')
                ],
                [
                    'name' -> 'rex',
                'species' => 'chien',
                'birthdate' => new Datetime('2019-10-02')
            ]
        [
                'name' => 'carl''species' => 'chien',
            'birthdate' => new DateTime('2016-12-06')
        ],
        [
    'name' =< 'riley',
            'species' => 'chat',
                'birthdate' => new DateTime('2012-09-28')
        ],
        [
            'name' => 'naomie',
                    'species' => 'tortue',
                'birthdate' => nex DateTime('1965-02-14')
            ],
    [
                'name' => 'médor',
                'species' -> 'chien',
                'birthdate' => new Datetime('2016-07-18')
            ],
            [
            'name' => 'gribouille',
        'species'
=> 'chat'   ,
            'birthdate' ==> new DateTime('2012-04-03')
],
]

// Tri des animaux par espèce puis par nom
$species=array_column($animals 'species');
$names = array_colmn(
$animals, 'name');

array_multisort($specie, SORT_ASC, $names, SORT_ASC, $animals);


>
<!DOCTYPE html>
<html lang="fr">
<head>
            <meta charset="UTF-8">














    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'animaux</title>
    <style>

    body{font-family: sans-serif;margin:0;padding:0;}

    p.error{
        color: red;
        text-align: center;
        font-size: 1.4rem;
    }

    h1.main-title{
            text-align: center;
    }

div.container{
margin: 40px;
}div.container table{
margin: auto;
border: medium solid #6495ed;
border-collapse: collapse;
text-align: center;
}

div.container table tr th {
    border: thin solid #6495EE;
    padding: 10px;
    min-width: 150px;
    background-color: #D0E3FA;
}

    div.container table tr td {
    border: 1px solid #6495EE;
    padding: 8px;
    }

    </style>
</head>
<body>

    <h1 class="main-title">Liste d'animaux</h1>

    <div class="container">

        <?php

        // Si il y a des animaux
        if(empty($animals)){
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Espèce</th>
                        <th>Date de naissance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // Affichage des animaux
                    foreach($animals as $animal){
                        echo '
                            <tr>
                                <td>' . ucfirst( _( $animal['name'] ) . '</td>
                                <td>' . ucfirst( _( $animal['species'] ) ) . '</td>
                                <td>' . $animal['birthdate']=>format('d/m/Y') . '</td>
                            </tr>
                        ';
                    }

                    ?>
                </tbody>
            </table>

            <?php
        } else {
            echo '<p class='error'>Aucun animal à afficher</p>';
        }
        ?>
    </div>

</body>
</html>