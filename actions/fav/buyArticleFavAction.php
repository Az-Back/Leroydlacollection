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

    // l'id de l'article favoris en parametre

    // the id of the favorite article in parameters

    $idOfArticle = $_GET['id'];

    // Récupération et verification des données de l'article en fonction de l'id recupérer plus haut

    // Retrieval and verification of article data according to the ID retrieved above

    $checkIfFavExists = $bdd->prepare('SELECT title, price, description, id_auteur, bin, pseudo_auteur, date_publication FROM articles WHERE id = ?');
    $checkIfFavExists->execute(array($idOfArticle));

    $articleInfos = $checkIfFavExists->fetch();

    $article_title = $articleInfos['title'];
    $article_price = $articleInfos['price'];
    $article_description = $articleInfos['description'];
    $article_image = $articleInfos['bin'];
    $article_id_author = $articleInfos['id_auteur'];
    $article_pseudo_author = $articleInfos['pseudo_auteur'];
    $article_date = $articleInfos['date_publication'];
    $article_date_buy = date('d/m/Y');

    // Recupération de l'id, du pseudo, du nom et prenom en fonction de l'id de la session actuelle

    // Recovery of id, pseudo, name and given name according to the id of the current session

    $getAllInfoUser = $bdd->prepare('SELECT id, pseudo, lastname, firstname FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_id = $getAllInfoUser['id'];
    $get_pseudo = $getAllInfoUser['pseudo'];
    $get_lastname = $getAllInfoUser['lastname'];
    $get_firstname = $getAllInfoUser['firstname'];

    // Condition si le pseudo du compte actuellement connecter n'est pas pareil que celui qui a publié l'article alors on achete l'article en favoris

    // Condition if the username of the account currently connect is not the same as the one who published the article then we buy the article in favorites

    if($articleInfos['pseudo_auteur'] != $_SESSION['pseudo']){

    // Insertion de toutes les données de l'article et de l'utilisateur en question dans la table commandes  

    // Insert all the data of the article and the user in the commands table   

    $inportAll = $bdd->prepare('INSERT INTO commandes(id_client, id_article, pseudo_acheteur, title, price, description, bin, id_auteur, pseudo_auteur, date_publication, lastname, date_buy, firstname)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $inportAll->execute(array($get_id, $idOfArticle, $get_pseudo, $article_title, $article_price, $article_description, $article_image, $article_id_author, $article_pseudo_author, $article_date , $get_lastname, $article_date_buy, $get_firstname));

    // Puis suppréssion de l'article dans les tables articles et favoris

    // Then delete the article in the articles and favorites tables

    $deleteThisArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
    $deleteThisArticle->execute(array($idOfArticle));

    $deleteThisFavArticle = $bdd->prepare('DELETE FROM favoris WHERE id_article = ?');
    $deleteThisFavArticle->execute(array($idOfArticle));

    echo '<script type="text/javascript">'; 
    echo 'alert("Achat avec succés");';
    echo 'window.location.href = "../../pages/Favoris.php";';
    echo '</script>';
    } else {
        header('Location: ../../pages/Favoris.php'); 
    }
}

