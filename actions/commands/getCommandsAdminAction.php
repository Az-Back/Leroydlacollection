<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des données de commandes en fonction de l'id de la session actuelle

// // Retrieve command data based on current session id

$getAllCommand = $bdd->query('SELECT id, id_article, pseudo_acheteur, title, price, pseudo_auteur, date_buy FROM commandes ORDER BY id DESC');



// Verifier si une recherche a été rentrée par l'utilisateur

// Check if a search was entered by the user

if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche

    // The research
    
    $userSearch = $_GET['search'];
    
    // Recuperer toutes les commandes qui correspondent a la recherche (en fonction du titre)

    // Retrieve all the commands that correspond to the search (depending on the title)

    $getAllCommand = $bdd->query('SELECT id, id_article, pseudo, title, price, pseudo_auteur, date_buy FROM commandes WHERE title LIKE "%'.$userSearch.'%" ORDER BY id DESC');
    
} elseif (isset($_GET['search']) && empty($_GET['search'])) {

    $getAllCommand = $bdd->query('SELECT * FROM commandes ORDER BY id DESC');
}