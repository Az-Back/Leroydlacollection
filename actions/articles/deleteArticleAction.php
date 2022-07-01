<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();


require('../security/securityAction.php');

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');

// Sert a verifier si la variable existe

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // Récupération de l'id de l'article

    //  Retrieving the item id

    $idOfTheArticle = $_GET['id'];

    // Verifier si l'article existe et récuperer les informations

    // Check if the item exists and retrieve the information

    $checkIfArticleExists = $bdd->prepare('SELECT pseudo_auteur FROM articles WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfTheArticle));

    if($checkIfArticleExists->rowCount() > 0){

        $articlesInfos = $checkIfArticleExists->fetch();
        
        if($articlesInfos['pseudo_auteur'] == $_SESSION['pseudo']){

            // Supprimer l'article en fonction de l'id

            // Delete the article according to the id

            $deleteThisArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
            $deleteThisArticle->execute(array($idOfTheArticle));
            usleep(1800000);

            // Rediriger l'utilisateur vers ses articles

            header('Location: ../../pages/MesArticles.php');

        } else {
            $errorMsg = "Vous ne pouvez pas supprimer l'article";
            header('Location: ../../pages/Articles.php');
        }

    } else {
        $errorMsg = "Vous ne pouvez pas supprimer l'article";
    }

} else {
    $errorMsg = "Vous ne pouvez pas supprimer l'article";
}