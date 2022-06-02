<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des articles en fonction de l'id de la session actuelle

// Retrieve items based on current session id

$getAllMyArticles = $bdd->prepare('SELECT id, title, description, price, bin FROM articles WHERE id_auteur = ? ORDER BY id DESC');
$getAllMyArticles->execute(array($_SESSION['id']));