<?php
require('database.php');

// Recuperer les questions par défaut sans recherche
$getInfoOfUser = $bdd->query('SELECT * FROM users');