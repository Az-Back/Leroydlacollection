<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Recuperer toutes les infos de l'utilisateur ou l'id correspond a la session en cours

// Retrieve all user information of the id corresponds to the current session

$getInfoOfUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
$getInfoOfUser->execute(array($_SESSION['id']));