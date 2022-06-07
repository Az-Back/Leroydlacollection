<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Recupération des articles mis en favoris en fonction de l'id de la session

// Retrieving items put in favorites according to session id

$getInfoFav = $bdd->prepare('SELECT id, id_article, title, description, price, bin, pseudo_auteur, date_publication FROM favoris WHERE id_session = ? ORDER BY id DESC');
$getInfoFav->execute(array($_SESSION['id']));