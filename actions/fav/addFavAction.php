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

    $idOfArticle = $_GET['id'];

    // Récupération des données de l'article en fonction de l'id recupérer plus haut

    // Retrieval of article data according to the ID retrieved above

    $checkIfQuestionExists = $bdd->prepare('SELECT id, title, price, description, bin, pseudo_auteur, date_publication FROM articles WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfArticle));

    $articleInfos = $checkIfQuestionExists->fetch();

    $article_title = $articleInfos['title'];
    $article_price = $articleInfos['price'];
    $article_description = $articleInfos['description'];
    $article_image = $articleInfos['bin'];
    $article_pseudo_author = $articleInfos['pseudo_auteur'];
    $article_date = $articleInfos['date_publication'];

    // Recupération de l'id en fonction de l'id de la session actuelle

    // Recovery of the id according to the id of the current session

    $getAllInfoUser = $bdd->prepare('SELECT id FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_id = $getAllInfoUser['id'];

    // Condition si le pseudo du compte actuellement connecter n'est pas pareil que celui qui a publié l'article alors on crée un article en favoris

    // Condition if the username of the account currently connect is not the same as the one that published the article then we create an article in favorites

    $checkIfThisFavAlreadyExists = $bdd->prepare('SELECT id_article FROM favoris WHERE id_article = ?');
        $checkIfThisFavAlreadyExists->execute(array($idOfArticle));

        if($checkIfThisFavAlreadyExists->rowCount() == 0){

            if($articleInfos['pseudo_auteur'] != $_SESSION['pseudo']){

            // Insertion de toutes les données de l'article en question dans la table favoris   

            // Insert all the data of the article in the favorite table   

            $inportAll = $bdd->prepare('INSERT INTO favoris(id_article, id_session, title, price, description, bin, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
            $inportAll->execute(array($idOfArticle, $get_id, $article_title, $article_price, $article_description, $article_image, $article_pseudo_author, $article_date));

            
            header('Location: ../../pages/Favoris.php');

            }   else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Vous ne pouvez pas mettre un de vos articles en favoris!");';
                echo 'window.location.href = "../../pages/Articles.php";';
                echo '</script>';
            }

        }       
                else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Vous ne pouvez pas mettre 2x un article en favoris!");';
                echo 'window.location.href = "../../pages/Articles.php";';
                echo '</script>';
        }
} 
        

