<?php
require('database.php');

// Recuperer les questions par défaut sans recherche
$getInfoOfUser = $bdd->prepare('SELECT pseudo FROM users WHERE id = ?');
$getInfoOfUser->execute(array($_SESSION['id']));