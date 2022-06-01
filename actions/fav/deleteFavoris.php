<?php

require('../database/database.php');

// Sert a verifier si la variable est declarer
if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // l'id de la question en parametre
    $idOfTheFav = $_GET['id'];

    // Verifier si la question existe
    $checkIfFavExists = $bdd->prepare('SELECT id FROM favoris WHERE id_article = ?');
    $checkIfFavExists->execute(array($idOfTheFav));

        // Recuperer les infos de la question
        $FavInfos = $checkIfFavExists->fetch();

            // Supprimer la question en fonction de son id rentré en paramétre
            $deleteThisFav = $bdd->prepare('DELETE FROM favoris WHERE id_article = ?');
            $deleteThisFav->execute(array($idOfTheFav));

            // Rediriger l'utilisateur vers ses questions
            header('Location: ../../pages/Favoris.php');
}            