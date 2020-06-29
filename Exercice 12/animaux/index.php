<?php

// Appel des variables
if(
    isset($_POST['name']) &&
    isset($_POST['species']) &&
    isset($_POST['birthdate']) 
){

     // Blocs des verifs
    if(!preg_match('/^[a-z áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\']{2,60}$/i', $_POST['name'])){
        $errors[] = 'Nom invalide';
    }

    if(!preg_match('/^[a-z áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\']{2,60}$/i', $_POST['species'])){
        $errors[] = 'Espèce invalide';
    }

    if(!preg_match('/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/i', $_POST['birthdate'])){
            $errors[] = 'Date de naissance invalide';
        }


        // Si pas d'erreurs
    if(!isset($errors)){

        // Connexion à la BDD
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=animals;charset=utf8', 'root', '');
    
            // Ligne permettant d'afficher les erreurs SQL à l'écran
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        } catch(Exception $e){
    
            die('Il y a un problème avec la bdd : ' . $e->getMessage());
        }
        // Requête préparée pour inséréer le nouvel animal (pas requête direct car il y a des variables à mettre dans la requête)
        $response = $bdd->prepare('INSERT INTO animals(name, species, birthdate) VALUES(?,?,?)');

        // Liaison des valeurs des marqueurs et execution de la requête
        $response->execute([
            $_POST['name'],
            $_POST['species'],
            $_POST['birthdate'],
        ]);

         // Si l'insertion a réussi (rowCount retournera donc 1), alors on crée un emssage de succès, sinon message d'erreur
         if($response->rowCount() > 0){
            $successMessage = 'L\'animal a bien été créé !';
        } else {
            $errors[] = 'Problème avec la base de données, veuillez ré-essayer';
        }

        // Fermeture de la requête
        $response->closeCursor();

    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15 - Formulaire et Insertion dans une base de données</title>
</head>
<body>

    <h1>15 - Formulaire et Insertion dans une base de données</h1>
    
    <?php
    
    // Si il y a des erreurs, on les affiches
    if(isset($errors)){
        foreach($errors as $error){
            echo '<p style="color:red;">' . $error . '</p>';
        }
    }

    // Si message de succès existe, on l'affiche. Sinon on affiche le formulaire
    if(isset($successMessage)){
        echo '<p style="color:green;">' . $successMessage . '</p>';
    } else {
    
        ?>

        <form action="" method="POST">
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="species" placeholder="Espece">
            <input type="date" name="birthdate" placeholder="Date d'anniversaire  Ex: 31/12/2019">
            <input type="submit">
        </form>

        <?php
    }
    ?>

</body>
</html>


