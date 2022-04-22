<?php

require('database.php');

// Recuperer les questions par défaut sans recherche
$getAllArticles = $bdd->query('SELECT id, id_auteur, title, description, price, bin, pseudo_auteur, date_publication FROM articles ORDER BY id DESC');

// Verifier si une recherche a été rentrée par l'utilisateur
if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche
    $usersSearch = $_GET['search'];

    // Recuperer toutes les questions qui correspondent a la recherche (en fonction du titre)
    $getAllArticles = $bdd->query('SELECT id, id_auteur, title, description, price, bin, pseudo_auteur, date_publication FROM articles WHERE title LIKE "%'.$usersSearch.'%" ORDER BY id DESC');

} 