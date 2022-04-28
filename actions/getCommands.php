<?php
require('database.php');

$getInfoCommand = $bdd->prepare('SELECT id, id_article, title, price, pseudo_auteur, date_buy FROM commandes WHERE id_client = ? ORDER BY id DESC');
$getInfoCommand->execute(array($_SESSION['id']));