<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Récuperation des articles 

// Retrieve items

$getAllArticles = $bdd->query('SELECT * FROM articles ORDER BY id DESC');