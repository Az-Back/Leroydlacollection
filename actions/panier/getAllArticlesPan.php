<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des données de commandes en fonction de l'id de la session actuelle

// // Retrieve command data based on current session id

$getInfoPan = $bdd->prepare('SELECT * FROM panier WHERE id_client = ?');
$getInfoPan->execute(array($_SESSION['id']));
$arts = $getInfoPan->fetchAll();