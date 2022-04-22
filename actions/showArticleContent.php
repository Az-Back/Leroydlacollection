<?php

require('database.php');


// Verifier si l'id de la question est rentrée dans l'URL
if(isset($_GET['id']) && !empty($_GET['id'])){

    // Recupérer l'identifiant de la question
    $idOfTheArticle = $_GET['id'];

    // Verifier si la question existe
    $checkIfArticleExists = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfTheArticle));

    if($checkIfArticleExists->rowCount() > 0) {

        // Récupérer toutes les données de la question
        $articlesInfos = $checkIfArticleExists->fetch();


        // Stocker les données de la question dans des variables
        $article_id = $articlesInfos['id'];
        $article_title = $articlesInfos['title'];
        $article_content = $articlesInfos['price'];
        $article_description = $articlesInfos['description'];
        $article_id_author = $articlesInfos['id_auteur'];
        $article_pseudo_author = $articlesInfos['pseudo_auteur'];
        $article_publication_date = $articlesInfos['date_publication'];
        $article_image_bin = $articlesInfos['bin'];

    } else {
        $errorMsg = "Aucune question n'a été trouvée";
    }

} else {
    $errorMsg = "Aucune question n'a été trouvée";
}