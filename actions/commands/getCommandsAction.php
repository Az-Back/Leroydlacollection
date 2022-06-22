<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des données de commandes en fonction de l'id de la session actuelle

// // Retrieve command data based on current session id

$getInfoCommand = $bdd->prepare('SELECT * FROM commandes WHERE id_client = ? ORDER BY id DESC');
$getInfoCommand->execute(array($_SESSION['id']));
$getCommand = $getInfoCommand->fetch();

$get_new_Command = $getCommand['id'];


$getInfoCom = $bdd->prepare('SELECT id_commande, id_article FROM detailcommandes WHERE id_commande = ?');
$getInfoCom->execute(array($get_new_Command));
$Trucs = $getInfoCom->fetchAll();
$tabArt = [];
foreach($Trucs as $Truc){
    array_push($tabArt, $Truc['id_article']);
}                        

$requestInfoPan = 'SELECT title, price FROM articles WHERE id IN ('. implode(',', array_map('intval', $tabArt)).')';
$getInfoPan = $bdd->prepare($requestInfoPan);
$getInfoPan->execute();
$getdamn = $getInfoPan->fetchAll();


$getInfoPseudo = $bdd->query('SELECT DISTINCT pseudo_auteur FROM articles WHERE id IN ('. implode(',', array_map('intval', $tabArt)).')');

$get_new_pseudo = $getInfoPseudo->fetchAll();


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