<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des données de commandes en fonction de l'id de la session actuelle

// // Retrieve command data based on current session id

$getInfoPan = $bdd->prepare('SELECT * FROM panier WHERE id_client = ?');
$getInfoPan->execute(array($_SESSION['id']));
$arts = $getInfoPan->fetchAll();


// Verifier si une recherche a été rentrée par l'utilisateur

// Check if a search was entered by the user

if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche

    // The research
    
    $userSearch = $_GET['search'];
    
    // Recuperer toutes les commandes qui correspondent a la recherche (en fonction du titre)

    // Retrieve all the commands that correspond to the search (depending on the title)

    $getInfoPan = $bdd->query('SELECT id_article, title, price, pseudo_auteur, bin FROM panier WHERE title LIKE "%'.$userSearch.'%"');
    
} elseif (isset($_GET['search']) && empty($_GET['search'])) {

    $getInfoPan = $bdd->query('SELECT * FROM panier');
}