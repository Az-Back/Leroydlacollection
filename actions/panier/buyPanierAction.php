<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');


// Sert a verifier si la variable existe

// Used to check if the variable exists


    $checkPan = $bdd->prepare('SELECT * FROM panier WHERE id_client = ?');
    $checkPan->execute(array($_SESSION['id']));

    $datas = $checkPan->fetchAll();
    $sum = 0;
    foreach($datas as $data){
    $sum += $data['price'];
    
    }
    $new_date_buy = date('d/m/Y');
    // Récupérer les données de l'utilisateur

    // Retrieve the user data

    $getAllInfoUser = $bdd->prepare('SELECT id, pseudo FROM users WHERE id = ?');
    $getAllInfoUser->execute(array($_SESSION['id']));

    $getAllInfoUser = $getAllInfoUser->fetch();

    $get_id = $getAllInfoUser['id'];
    $get_pseudo = $getAllInfoUser['pseudo'];



    // Insertion des infos dans la table commande et suppréssion dans la table article
    
    // Inserting information in the command table and delete in the article table  

    $inportAll = $bdd->prepare('INSERT INTO commandes(id_client, pseudo_acheteur, montant ,date_buy)VALUES(?, ?, ?, ?)');
    $inportAll->execute(array($get_id, $get_pseudo, $sum, $new_date_buy));

    $getall = $bdd->prepare('SELECT * FROM commandes WHERE id_client = ? ORDER by id DESC LIMIT 1');
    $getall->execute(array($_SESSION['id']));

    $new_id_commandes = $getall->fetch();

    $new_new_id_commandes = $new_id_commandes['id'];

    foreach($datas as $data){
        
        $reinportaAll = $bdd->prepare('INSERT INTO detailcommandes(id_commande, id_article)VALUES(?,?)');
        $reinportaAll->execute(array($new_new_id_commandes, $data['id_article']));
    }

    $deleteThisArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
    $deleteThisArticle->execute(array($idOfArticle));

    $deleteThisTruc = $bdd->prepare('DELETE FROM favoris WHERE id = ?');
    $deleteThisTruc->execute(array($idOfArticle));

    $deleteThisShit = $bdd->prepare('DELETE FROM panier WHERE id_client = ?');
    $deleteThisShit->execute(array($_SESSION['id']));

    echo '<script type="text/javascript">'; 
    echo 'alert("Article Acheter !");';
    echo 'window.location.href = "../../pages/MesCommandes.php";';
    echo '</script>';
