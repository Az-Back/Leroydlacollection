<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Sert a verifier si la variable est declarer et si l'id recuperer n'est pas vide

// Used to check if the variable is declared and if the id recover is not empty

if(isset($_GET['id']) && !empty($_GET['id'])){

    $idOfTheArticle = $_GET['id'];

    // Récupération et vérification des données de l'article en fonction de l'id

    // Retrieving and verifying article data based on id

    $checkIfArticleExists = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfTheArticle));

    if($checkIfArticleExists->rowCount() > 0){


        // Recuperer les données de l'article

        // Retrieve the data of the article
        
        $articlesInfos = $checkIfArticleExists->fetch();
        if($articlesInfos['id_auteur'] == $_SESSION['id']){

            $article_title = $articlesInfos['title'];
            $article_description = $articlesInfos['description'];
            $article_content = $articlesInfos['price'];
            $article_image_bin = $articlesInfos['bin'];

            $article_description = str_replace('<br />', '', $article_description);
            $article_content = str_replace('<br />', '', $article_content);

        } else {
            $errorMsg = "Vous n'êtes pas l'auteur de cet article !";
        }

    } else {
        $errorMsg = "Aucun article n'a été trouvé";
    }

} else {
    $errorMsg = "Aucun article n'a été trouvé";
}