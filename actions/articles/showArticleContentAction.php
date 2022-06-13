<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');


// Sert a verifier si la variable est declarer et si l'id recuperer n'est pas vide

// Used to check if the variable is declared and if the id recover is not empty

if(isset($_GET['id']) && !empty($_GET['id'])){

    // l'id de l'article en parametre

    // The article id in parameter

    $idOfTheArticle = $_GET['id'];

    // Récupération et vérification des données de l'article en fonction de l'id

    // Retrieving and verifying article data based on id

    $checkIfArticleExists = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfTheArticle));

    if($checkIfArticleExists->rowCount() > 0) {

        $articlesInfos = $checkIfArticleExists->fetch();

        // Stocker les données de l'article dans des variables
        $article_id = $articlesInfos['id'];
        $article_title = $articlesInfos['title'];
        $article_price = $articlesInfos['price'];
        $article_description = $articlesInfos['description'];
        $article_id_author = $articlesInfos['id_auteur'];
        $article_pseudo_author = $articlesInfos['pseudo_auteur'];
        $article_publication_date = $articlesInfos['date_publication'];
        $article_image_bin = $articlesInfos['bin'];

    } else {
        $errorMsg = "Aucun article n'a été trouvé";
    }

} else {
    $errorMsg = "Aucun article n'a été trouvé";
}