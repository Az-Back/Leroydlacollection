<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');


// Selection de toutes les données du panier en fonction de l'id de la personne connecté

// Selection of all the data of the cart according to the id of the connected person

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



    // Insertion des infos dans la table commande
    
    // Insert information in the command table

    $inportAll = $bdd->prepare('INSERT INTO commandes(id_client, pseudo_acheteur, montant ,date_buy)VALUES(?, ?, ?, ?)');
    $inportAll->execute(array($get_id, $get_pseudo, $sum, $new_date_buy));

    // Récupération de l'id de la commande

    // Retrieving the order id

    $getall = $bdd->prepare('SELECT * FROM commandes WHERE id_client = ? ORDER by id DESC LIMIT 1');
    $getall->execute(array($_SESSION['id']));

    $new_id_commandes = $getall->fetch();

    $new_new_id_commandes = $new_id_commandes['id'];

    // Pour chaque article on insert dans l'id de l'article et de la commande

    // For each item we insert in the item id and the order

    foreach($datas as $data){
        
        $reinportaAll = $bdd->prepare('INSERT INTO detailcommandes(id_commande, id_article)VALUES(?,?)');
        $reinportaAll->execute(array($new_new_id_commandes, $data['id_article']));
    }

    // On récupére les données des articles qui vont être supprimer pour les reutiliser pour les commandes

    // We recover the data of the items that will be deleted to reuse them for the orders

    $needIdArt = $bdd->prepare('SELECT * FROM panier');
     $needIdArt->execute();

     $getSuperArt = $needIdArt->fetchAll();

     foreach($getSuperArt as $getArtInfo){
        $getId = $getArtInfo['id_article'];
        $getTitle = $getArtInfo['title'];
        $getPrice = $getArtInfo['price'];
        $getAuteur = $getArtInfo['pseudo_auteur'];

        $inserTo = $bdd->prepare('INSERT INTO articlesup(title, price, pseudo_auteur, id_article)VALUES(?,?,?,?)');
        $inserTo->execute(array($getTitle, $getPrice, $getAuteur, $getId));

        $Destroy = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        $Destroy->execute(array($getId));

        $DestroyFav = $bdd->prepare('DELETE FROM favoris WHERE id_article = ?');
        $DestroyFav->execute(array($getId));
     }

    // On supprime ce qu'il y a dans le panier

    // Delete what is in the basket

    $deleteThisShit = $bdd->prepare('DELETE FROM panier WHERE id_client = ?');
    $deleteThisShit->execute(array($_SESSION['id']));

    echo '<script type="text/javascript">'; 
    echo 'alert("Article Acheter !");';
    echo 'window.location.href = "../../pages/MesCommandes.php";';
    echo '</script>';
