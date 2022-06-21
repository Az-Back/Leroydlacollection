<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');


// Sert a verifier si la variable existe

// Used to check if the variable exists


    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM panier WHERE id_client = ?');
    $checkIfQuestionExists->execute(array($_SESSION['id']));

    $datas = $checkIfQuestionExists->fetchAll();

    foreach($datas as $data){
    
    $data['title'];
    $data['price'];
    $data['bin'];
    $data['id_auteur'];
    $data['pseudo_auteur'];
    $data['date_publication'];
    $new_date_buy = date('d/m/Y');
    }

    // Récupérer les données de l'utilisateur

    // Retrieve the user data

    $getAllInfoUser = $bdd->prepare('SELECT id, pseudo, lastname, firstname FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_id = $getAllInfoUser['id'];
    $get_pseudo = $getAllInfoUser['pseudo'];
    $get_lastname = $getAllInfoUser['lastname'];
    $get_firstname = $getAllInfoUser['firstname'];

    // Condition

    if($articleInfos['pseudo_auteur'] != $_SESSION['pseudo']){

    // Insertion des infos dans la table commande et suppréssion dans la table article
    
    // Inserting information in the command table and delete in the article table  

    $inportAll = $bdd->prepare('INSERT INTO commandes(id_client, id_article, pseudo_acheteur, title, price, description, bin, id_auteur, pseudo_auteur, date_publication, lastname, date_buy, firstname)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $inportAll->execute(array($get_id, $, $get_pseudo, $article_title, $article_price, $article_description, $article_image, $article_id_author, $article_pseudo_author, $article_date , $get_lastname, $article_date_buy, $get_firstname));

    $deleteThisArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
    $deleteThisArticle->execute(array($idOfArticle));

    $deleteThisArticle = $bdd->prepare('DELETE FROM favoris WHERE id = ?');
    $deleteThisArticle->execute(array($idOfArticle));

    echo '<script type="text/javascript">'; 
    echo 'alert("Article Acheter");';
    echo 'window.location.href = "../../pages/Articles.php";';
    echo '</script>';
    } else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Vous ne pouvez pas acheter vos propres articles !");';
    echo 'window.location.href = "../../pages/Articles.php";';
    echo '</script>';
    }
}