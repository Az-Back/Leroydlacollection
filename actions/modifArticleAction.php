<?php

require('database.php');

// Validation du formulaire
if(isset($_POST['validate'])){


    // Verifier si les champs sont remplis
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])){

        // Les données a faire passer dans la requête
        $new_article_title = htmlspecialchars($_POST['title']);
        $new_article_description = nl2br(htmlspecialchars($_POST['description']));
        $new_article_price = nl2br(htmlspecialchars($_POST['content']));
        $new_article_image_bin = file_get_contents($_FILES['picture']['tmp_name']);


        // Modifier les informations de la question qui posséde l'id rentré en paramètre dans l'url
        $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET titre = ?, description = ?, price = ?, bin = ? WHERE id = ?');
        $editArticleOnWebsite->execute(array($new_article_title, $new_article_description, $new_article_price, $new_article_image_bin, $idOfTheArticle));

        header('Location: ../pages/MesArticles.php');

    } else {
        $errorMsg = "Veuillez modifier tous les champs";
    }
}