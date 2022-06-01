<?php
session_start();
require('../database/database.php');
// Sert a verifier si la variable est declarer
if(isset($_GET['id']) && !empty($_GET['id'])){
    // l'id de la question en parametre
    $idOfArticle = $_GET['id'];

    // Verifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT title, price, description, id_auteur, bin, pseudo_auteur, date_publication FROM articles WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfArticle));

    $articleInfos = $checkIfQuestionExists->fetch();

    $article_title = $articleInfos['title'];
    $article_price = $articleInfos['price'];
    $article_description = $articleInfos['description'];
    $article_image = $articleInfos['bin'];
    $article_id_author = $articleInfos['id_auteur'];
    $article_pseudo_author = $articleInfos['pseudo_auteur'];
    $article_date = $articleInfos['date_publication'];
    $article_date_buy = date('d/m/Y');


    $getAllInfoUser = $bdd->prepare('SELECT id, pseudo, lastname, firstname FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_id = $getAllInfoUser['id'];
    $get_pseudo = $getAllInfoUser['pseudo'];
    $get_lastname = $getAllInfoUser['lastname'];
    $get_firstname = $getAllInfoUser['firstname'];

    if($articleInfos['pseudo_auteur'] != $_SESSION['pseudo']){

    $inportAll = $bdd->prepare('INSERT INTO commandes(id_client, id_article, pseudo, title, price, description, bin, id_auteur, pseudo_auteur, date_publication, lastname, date_buy, firstname)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $inportAll->execute(array($get_id, $idOfArticle, $get_pseudo, $article_title, $article_price, $article_description, $article_image, $article_id_author, $article_pseudo_author, $article_date , $get_lastname, $article_date_buy, $get_firstname));

    $deleteThisArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
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