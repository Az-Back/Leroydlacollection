<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Sert a verifier si la variable est declarer 

// Used to check if the variable is declared

if(isset($_POST['validate'])){

    // Verifier si l'utilisateur a bien completer tous les champs !

    // Check if the user has completed all fields!

    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_FILES['picture'])){
        
        // Les données de l'article

        // Article data

        $article_title = htmlspecialchars($_POST['title']);
        $article_description = nl2br(htmlspecialchars($_POST['description']));
        $article_content = nl2br(htmlspecialchars($_POST['price']));
        $article_image_name = $_FILES['picture']['name'];
        $article_image_size = $_FILES['picture']['size'];
        $article_image_type = $_FILES['picture']['type'];
        $article_image_bin = file_get_contents($_FILES['picture']['tmp_name']);
        $article_date = date('d/m/Y');
        $article_id_author = $_SESSION['id'];
        $article_pseudo_author = $_SESSION['pseudo'];
        
        // Inserer l'article dans la base de données

        // Insert the article in the database
        
        $insertArticleOnWebsite = $bdd->prepare('INSERT INTO articles(title, description, price, nom_image, image_taille, type_image, bin, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insertArticleOnWebsite->execute(
            array(
                $article_title, 
                $article_description, 
                $article_content,
                $article_image_name,
                $article_image_size,
                $article_image_type,
                $article_image_bin, 
                $article_id_author, 
                $article_pseudo_author, 
                $article_date
            )
        );

        $successMsg = 'Votre article a bien eté publiée sur le site';
        header( "refresh:1.5; url=Articles.php" );
    } else {
        $errorMsg = 'Veuillez remplir tous les champs !';
    }

}

