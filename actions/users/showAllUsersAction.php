<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');


// Recuperer les articles par défaut sans recherche

// Recover default articles without searching

$getAllUsers= $bdd->query('SELECT * FROM users ORDER BY id DESC');
