<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des données de commandes en fonction de l'id de la session actuelle

// // Retrieve command data based on current session id

$getInfoCommand = $bdd->prepare('SELECT id, id_article, title, price, pseudo_auteur, date_buy FROM commandes WHERE id_client = ? ORDER BY id DESC');
$getInfoCommand->execute(array($_SESSION['id']));


// Verifier si une recherche a été rentrée par l'utilisateur

// Check if a search was entered by the user

if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche

    // The research
    
    $userSearch = $_GET['search'];
    
    // Recuperer toutes les commandes qui correspondent a la recherche (en fonction du titre)

    // Retrieve all the commands that correspond to the search (depending on the title)

    $getInfoCommand = $bdd->query('SELECT id, id_article, title, price, pseudo_auteur, date_buy FROM commandes WHERE title LIKE "%'.$userSearch.'%" ORDER BY id DESC');
    
} elseif (isset($_GET['search']) && empty($_GET['search'])) {

    $getInfoCommand = $bdd->query('SELECT * FROM commandes ORDER BY id DESC');
}