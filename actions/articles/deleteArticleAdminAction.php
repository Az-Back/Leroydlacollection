<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();


require('../security/securityAction2.php');

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');

// Sert a verifier si la variable existe

// Used to check if the variable exists

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // Récupération de l'id de l'article

    // Retrieving the item id

    $idOfTheArticle = $_GET['id'];

    // Verifier si l'article existe et recuperer les infos de l'article

    // Check if the article exists and get the article info

    $checkIfArticleExists = $bdd->prepare('SELECT id FROM articles WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfTheArticle));

    if($checkIfArticleExists->rowCount() > 0){

        $articlesInfos = $checkIfArticleExists->fetch();
        if(isset($_SESSION['admin'])){
        
            // Supprimer l'article en fonction de son id rentré en paramétre

            $deleteThisArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
            $deleteThisArticle->execute(array($idOfTheArticle));
            usleep(1800000);
            // Rediriger l'utilisateur vers ses questions
            header('Location: ../../pages/allArticles.php');

        } else {
            $errorMsg = "Vous ne pouvez pas supprimer l'article";
            header('Location: ../../pages/allArticles.php');
        }

    } else {
        $errorMsg = "Vous ne pouvez pas supprimer l'article";
    }

} else {
    $errorMsg = "Vous ne pouvez pas supprimer l'article";
}