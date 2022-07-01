<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des données de commandes en fonction de l'id de la session actuelle

// // Retrieve command data based on current session id

if(isset($_SESSION['admin'])){
$getInfoCommand = $bdd->prepare('SELECT id_commande, title, price, pseudo_auteur, montant, date_buy FROM detailcommandes 
                                    JOIN commandes ON commandes.id = detailcommandes.id_commande
                                    JOIN articles ON articles.id = detailcommandes.id_article
                                    ORDER BY detailcommandes.id DESC');
$getInfoCommand->execute();
$getCommand = $getInfoCommand->fetchAll();
} else {
    header('Location: ../../pages/Accueil.php');
}

// Verifier si une recherche a été rentrée par l'utilisateur

// Check if a search was entered by the user

if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche

    // The research
    
    $userSearch = $_GET['search'];
    
    // Recuperer toutes les commandes qui correspondent a la recherche (en fonction du titre)

    // Retrieve all the commands that correspond to the search (depending on the title)

    $getInfoCommand = $bdd->query('SELECT * FROM detailscommandes WHERE title LIKE "%'.$userSearch.'%" ORDER BY id DESC');
    
} elseif (isset($_GET['search']) && empty($_GET['search'])) {

    $getInfoCommand = $bdd->query('SELECT * FROM detailcommandes ORDER BY id DESC');
}