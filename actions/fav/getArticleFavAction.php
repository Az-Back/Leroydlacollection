<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');


// Sert a verifier si la variable est declarer et si l'id recuperer n'est pas vide

// Used to check if the variable is declared and if the id recover is not empty

if(isset($_GET['id']) && !empty($_GET['id'])){

    // l'id de l'article favoris en parametre

    // the id of the favorite article in parameters

    $idOfTheFav = $_GET['id'];

    // Récupération et verification des données de l'article en fonction de l'id recupérer plus haut

    // Retrieval and verification of article data according to the ID retrieved above

    $checkIfArticleExists = $bdd->prepare('SELECT * FROM favoris WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfTheFav));

    if($checkIfArticleExists->rowCount() > 0) {

        // Récupérer toutes les données de l'article en favoris
        
        // Recover all data of the article in favorites 

        $articlesInfos = $checkIfArticleExists->fetch();


        // Stocker les données de l' article dans des variables

        // Store article data in variables
        
        $article_id = $articlesInfos['id_article'];
        $article_title = $articlesInfos['title'];
        $article_price = $articlesInfos['price'];
        $article_description = $articlesInfos['description'];
        $article_pseudo_author = $articlesInfos['pseudo_auteur'];
        $article_publication_date = $articlesInfos['date_publication'];
        $article_image_bin = $articlesInfos['bin'];

    } else {
        $errorMsg = "Aucun article n'a été trouvée";
    }

} else {
    $errorMsg = "Aucun article n'a été trouvée";
}