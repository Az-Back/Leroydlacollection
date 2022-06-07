<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des articles en fonction de l'id de la session actuelle

// Retrieve items based on current session id

$getAllArticles = $bdd->query('SELECT * FROM articles ORDER BY id DESC');