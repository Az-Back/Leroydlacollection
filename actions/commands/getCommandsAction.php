<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récupére le pseudo de la table users en fonction de l'id de la session

    $getAllInfoUser = $bdd->prepare('SELECT pseudo FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_pseudo = $getAllInfoUser['pseudo'];

// Si la session pseudo correspond au pseudo récupérer au dessus alors on selectionne toutes les données qui nous interessent de detail commandes

// Pour cela j'ai besoin de faire correspondre via les jointures l'id des commandes de la table commandes avec id_commande de la table detailcommandes

// Ainsi que l'id des articles dans la table articles a id_article dans la table detailcommandes

// En fonction de l'id_client qui correspond a la session id

if($_SESSION['pseudo'] == $get_pseudo){
        $getInfoCommand = $bdd->prepare('SELECT id_commande, title, price, pseudo_auteur, montant, date_buy FROM detailcommandes 
                                        JOIN commandes ON commandes.id = detailcommandes.id_commande
                                        JOIN articles ON articles.id = detailcommandes.id_article
                                        WHERE id_client = ?
                                        ORDER BY detailcommandes.id DESC');
        $getInfoCommand->execute(array($_SESSION['id']));
        $getCommand = $getInfoCommand->fetchAll();
} else {
    header('Location: ../../pages/Accueil.php');
}      
       
    
        /*foreach($getCommand as $getCom)
        {
            $tabArt = [];
            $get_new_Command = $getCom['id_commande'];
            
            $getInfoCom = $bdd->prepare('SELECT id_article FROM detailcommandes WHERE id_commande = ?');
            $getInfoCom->execute(array($get_new_Command));
            
            $Trucs = $getInfoCom->fetchAll();
            
            foreach($Trucs as $Truc){    
                array_push($tabArt, $Truc['id_article']);
            }
   
            $requestInfoPan = 'SELECT title, price FROM articles WHERE id IN ('. implode(',', array_map('intval', $tabArt)).')';
            $getInfoPan = $bdd->prepare($requestInfoPan);
            $getInfoPan->execute();
            $getdamn = $getInfoPan->fetchAll();
            
            
            $getInfoPseudo = $bdd->prepare('SELECT DISTINCT pseudo_auteur FROM articles WHERE id IN ('. implode(',', array_map('intval',  $tabArt)).')');
            $getInfoPseudo->execute();
            $get_new_pseudo = $getInfoPseudo->fetchAll();
            print_r($get_new_pseudo);
        }*/

// Verifier si une recherche a été rentrée par l'utilisateur

// Check if a search was entered by the user

if(isset($_GET['search']) && !empty($_GET['search'])){

    // La recherche

    // The research
    
    $userSearch = $_GET['search'];
    
    // Recuperer toutes les commandes qui correspondent a la recherche (en fonction du titre)

    // Retrieve all the commands that correspond to the search (depending on the title)

    $getInfoCommand = $bdd->query('SELECT * FROM commandes WHERE date_buy LIKE "%'.$userSearch.'%" ORDER BY id DESC');
    
} elseif (isset($_GET['search']) && empty($_GET['search'])) {

    $getInfoCommand = $bdd->query('SELECT * FROM detailcommandes ORDER BY id DESC');
}
