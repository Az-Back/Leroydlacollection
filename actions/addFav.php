<?php
session_start();
require('database.php');
// Sert a verifier si la variable est declarer
if(isset($_GET['id']) && !empty($_GET['id'])){
    // l'id de la question en parametre
    $idOfArticle = $_GET['id'];

    // Verifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT id, title, price, description, id_auteur, bin, pseudo_auteur, date_publication FROM articles WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfArticle));

    $articleInfos = $checkIfQuestionExists->fetch();

    $article_title = $articleInfos['title'];
    $article_price = $articleInfos['price'];
    $article_description = $articleInfos['description'];
    $article_image = $articleInfos['bin'];
    $article_pseudo_author = $articleInfos['pseudo_auteur'];
    $article_date = $articleInfos['date_publication'];

    $getAllInfoUser = $bdd->prepare('SELECT id FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_id = $getAllInfoUser['id'];

    if($articleInfos['pseudo_auteur'] != $_SESSION['pseudo']){


    $inportAll = $bdd->prepare('INSERT INTO favoris(id_article, id_session, title, price, description, bin,  pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
    $inportAll->execute(array($idOfArticle, $get_id, $article_title, $article_price, $article_description, $article_image, $article_pseudo_author, $article_date));

    header('Location: ../pages/Favoris.php'); 
}   else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Vous ne pouvez pas mettre un de vos articles en favoris!");';
    echo 'window.location.href = "../pages/Articles.php";';
    echo '</script>';
}
} 
        

