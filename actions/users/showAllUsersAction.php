<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Recuperer les information des utilisateurs

// Retrieve user information

$getAllUsers= $bdd->query('SELECT * FROM users ORDER BY id DESC');
