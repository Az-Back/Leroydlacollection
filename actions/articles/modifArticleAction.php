<?php

require('../actions/database/database.php');

// Validation du formulaire
if(isset($_POST['validate']))
{
    
    if (empty($_POST['title']) && empty($_POST['description']) && empty($_POST['price']) && empty($_FILES['picture']['tmp_name'])) {
        $errorMsg = "Veuillez modifier au moins un champs !";
            }
            // Verifier si les champs sont remplis
            elseif (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_FILES['picture']['tmp_name'])){
                $new_article_title = htmlspecialchars($_POST['title']);
                $new_article_description = nl2br(htmlspecialchars($_POST['description']));
                $new_article_price = nl2br(htmlspecialchars($_POST['price']));
                $new_article_image_bin = file_get_contents($_FILES['picture']['tmp_name']);
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET title = ?, description = ?, price = ?, bin = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_title, $new_article_description, $new_article_price, $new_article_image_bin, $idOfTheArticle));
                $successMsg = "Article Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }
            
            elseif (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['price']) && empty($_FILES['picture']['tmp_name'])) {
                $new_article_title = htmlspecialchars($_POST['title']);
                $new_article_description = nl2br(htmlspecialchars($_POST['description']));
                $new_article_price = htmlspecialchars($_POST['price']);
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET title = ?, description = ?, price = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_title, $new_article_description, $new_article_price, $idOfTheArticle));
                $successMsg = "Titre Description et Prix Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }
            
            elseif (!empty($_POST['title']) && !empty($_POST['description'])) {
                $new_article_title = htmlspecialchars($_POST['title']);
                $new_article_description = nl2br(htmlspecialchars($_POST['description']));
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET title = ?, description = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_title, $new_article_description, $idOfTheArticle));
                $successMsg = "Titre et Description Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }

            elseif (!empty($_POST['title']) && !empty($_POST['price'])) {
                $new_article_title = htmlspecialchars($_POST['title']);
                $new_article_price = htmlspecialchars($_POST['price']);
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET title = ?, price = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_title, $new_article_price, $idOfTheArticle));
                $successMsg = "Titre et Prix Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }


            elseif (!empty($_POST['description']) && !empty($_POST['price'])) {
                $new_article_description = nl2br(htmlspecialchars($_POST['description']));
                $new_article_price = htmlspecialchars($_POST['price']);
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET description = ?, price = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_description, $new_article_price, $idOfTheArticle));
                $successMsg = "Description et Prix Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }
            

            elseif(!empty($_POST['title'])){

                // Les données a faire passer dans la requête
                $new_article_title = htmlspecialchars($_POST['title']);
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET title = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_title, $idOfTheArticle));
                $successMsg = "Titre Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }

            elseif (!empty($_POST['description'])){
                $new_article_description = nl2br(htmlspecialchars($_POST['description']));
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET description = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_description, $idOfTheArticle));
                $successMsg = "Description Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }

            elseif (!empty($_POST['price'])){
                $new_article_price = nl2br(htmlspecialchars($_POST['price']));
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET price = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_price, $idOfTheArticle));
                $successMsg = "Prix Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }

            elseif (!empty($_FILES['picture'])){
                $new_article_image_bin = file_get_contents($_FILES['picture']['tmp_name']);
                $editArticleOnWebsite = $bdd->prepare('UPDATE articles SET bin = ? WHERE id = ?');
                $editArticleOnWebsite->execute(array($new_article_image_bin, $idOfTheArticle));
                $successMsg = "Image Modifier";
                header( "refresh:1.5; url=MesArticles.php" );
            }
     
}            
