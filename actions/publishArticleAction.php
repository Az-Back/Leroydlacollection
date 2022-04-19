<?php

require('database.php');

// Sert a savoir si l'utilisateur a bien cliquer sur le bouton
if(isset($_POST['validate'])){

    // Verifier si les champs ne sont pas vides
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content']) && !empty($_FILES['picture'])){
        
        // les données de la question
        $article_title = htmlspecialchars($_POST['title']);
        $article_description = nl2br(htmlspecialchars($_POST['description']));
        $article_content = nl2br(htmlspecialchars($_POST['content']));
        $article_image_name = $_FILES['picture']['name'];
        $article_image_size = $_FILES['picture']['size'];
        $article_image_type = $_FILES['picture']['type'];
        $article_image_bin = file_get_contents($_FILES['picture']['tmp_name']);
        $article_date = date('d/m/Y');
        $article_id_author = $_SESSION['id'];
        $article_pseudo_author = $_SESSION['pseudo'];
        
        // Inserer la question sur la question
        $insertArticleOnWebsite = $bdd->prepare('INSERT INTO articles(titre, description, contenu, nom_image, image_taille, type_image, bin, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
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
    } else {
        $errorMsg = 'Veuilez remplir tous les champs !';
    }

}