<?php
require('database.php');

$getInfoCommand = $bdd->prepare('SELECT id, id_article, title, price, pseudo_auteur, date_buy FROM commandes WHERE id_client = ? ORDER BY id DESC');
$getInfoCommand->execute(array($_SESSION['id']));

if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche
    $userSearch = $_GET['search'];
    
    // Recuperer toutes les questions qui correspondent a la recherche (en fonction du titre)
    $getInfoCommand = $bdd->query('SELECT id, id_article, title, price, pseudo_auteur, date_buy FROM commandes WHERE title LIKE "%'.$userSearch.'%" ORDER BY id DESC');
    
}