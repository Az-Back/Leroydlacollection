<?php
require('database.php');

// Recuperer les questions par défaut sans recherche
$getInfoOfUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
$getInfoOfUser->execute(array($_SESSION['id']));