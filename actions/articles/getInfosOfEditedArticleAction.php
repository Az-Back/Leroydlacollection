<?php

require('../actions/database/database.php');

// Verifier si l'id de la question est bien passer en parametre dans l'url
if(isset($_GET['id']) && !empty($_GET['id'])){

    $idOfTheArticle = $_GET['id'];

    // Verifier si la question existe
    $checkIfArticleExists = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfTheArticle));

    if($checkIfArticleExists->rowCount() > 0){


        // Recuperer les données de la question
        $articlesInfos = $checkIfArticleExists->fetch();
        if($articlesInfos['id_auteur'] == $_SESSION['id']){

            $article_title = $articlesInfos['title'];
            $article_description = $articlesInfos['description'];
            $article_content = $articlesInfos['price'];
            $article_image_bin = $articlesInfos['bin'];

            $article_description = str_replace('<br />', '', $article_description);
            $article_content = str_replace('<br />', '', $article_content);

        } else {
            $errorMsg = "Vous n'êtes pas l'auteur de cette article !";
        }

    } else {
        $errorMsg = "Aucun article n'a été trouvé";
    }

} else {
    $errorMsg = "Aucun article n'a été trouvé";
}