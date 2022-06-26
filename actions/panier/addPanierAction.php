<?php

// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');


// Sert a verifier si la variable est declarer et si l'id recuperer n'est pas vide

// Used to check if the variable is declared and if the id recover is not empty

if(isset($_GET['id']) && !empty($_GET['id'])){

    // l'id de l'article en parametre

    // The article id in parameter

    $idOfArticlePan = $_GET['id'];

    // Récupération des données de l'article en fonction de l'id recupérer plus haut

    // Retrieval of article data according to the ID retrieved above

    $getInfoArt = $bdd->prepare('SELECT id, title, price, bin, id_auteur, pseudo_auteur FROM articles WHERE id = ?');
    $getInfoArt->execute(array($idOfArticlePan));

    $InfosArt = $getInfoArt->fetch();

    $article_title_art = $InfosArt['title'];
    $article_price_art = $InfosArt['price'];
    $article_image_art = $InfosArt['bin'];
    $article_id_author_art = $InfosArt['id_auteur'];
    $article_pseudo_author_art = $InfosArt['pseudo_auteur'];
    
    $id_c = 1;
    // Recupération de l'id en fonction de l'id de la session actuelle

    // Recovery of the id according to the id of the current session

    $getAllInfoUser = $bdd->prepare('SELECT id FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_id = $getAllInfoUser['id'];

    // Condition si le pseudo du compte actuellement connecter n'est pas pareil que celui qui a publié l'article alors on crée un article en favoris

    // Condition if the username of the account currently connect is not the same as the one that published the article then we create an article in favorites

    $checkIfThisPanAlreadyExists = $bdd->prepare('SELECT id_article FROM panier WHERE id_article = ?');
        $checkIfThisPanAlreadyExists->execute(array($idOfArticlePan));

        if($checkIfThisPanAlreadyExists->rowCount() == 0){

            if($InfosArt['pseudo_auteur'] != $_SESSION['pseudo']){

            // Insertion de toutes les données de l'article en question dans la table favoris   

            // Insert all the data of the article in the favorite table   

            $inportAll = $bdd->prepare('INSERT INTO panier(id_client, id_article, title, price, bin, id_auteur, pseudo_auteur, id_commande)VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
            $inportAll->execute(array($get_id, $idOfArticlePan, $article_title_art, $article_price_art, $article_image_art, $article_id_author_art, $article_pseudo_author_art, $id_c));

            sleep(0.5);
            header('Location: ../../pages/Panier.php');

            }   else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Vous ne pouvez pas mettre un de vos articles dans le panier!");';
                echo 'window.location.href = "../../pages/Articles.php";';
                echo '</script>';
            }

        }       
                else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Vous ne pouvez pas mettre 2x un article dans le panier!");';
                echo 'window.location.href = "../../pages/Articles.php";';
                echo '</script>';
        }
} 
        

