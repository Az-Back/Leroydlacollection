<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');


// Recuperer les articles par défaut sans recherche

// Recover default articles without searching

$getAllArticles = $bdd->query('SELECT id, id_auteur, title, description, price, bin, pseudo_auteur, date_publication FROM articles ORDER BY id DESC');

// Verifier si une recherche a été rentrée par l'utilisateur

// Check if a search was entered by the user

if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche

    // The research
    $usersSearch = $_GET['search'];

    // Recuperer tout les articles qui correspondent a la recherche (en fonction du titre)
    $getAllArticles = $bdd->query('SELECT id, id_auteur, title, description, price, bin, pseudo_auteur, date_publication FROM articles WHERE title LIKE "%'.$usersSearch.'%" ORDER BY id DESC');

} elseif (isset($_GET['search']) && empty($_GET['search']))

{
    header('Location: ../pages/Articles.php'); 
}