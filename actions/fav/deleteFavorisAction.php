<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');

// Sert a verifier si la variable est declarer et si l'id recuperer n'est pas vide

// Used to check if the variable is declared and if the id recover is not empty

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // l'id de l'article en parametre

    // The article id in parameter

    $idOfTheFav = $_GET['id'];

    // Verification des données de l'article en fonction de l'id recupérer plus haut

    // Verification of article data according to the ID retrieved above

    $checkIfFavExists = $bdd->prepare('SELECT id FROM favoris WHERE id_article = ?');
    $checkIfFavExists->execute(array($idOfTheFav));


            // Supprimer l'article en fonction de son id rentré en paramétre

            // Delete the article according to its id entered in the configuration

            $deleteThisFav = $bdd->prepare('DELETE FROM favoris WHERE id_article = ?');
            $deleteThisFav->execute(array($idOfTheFav));

            // Rediriger l'utilisateur vers ses questions
            header('Location: ../../pages/Favoris.php');
             
}          