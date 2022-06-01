<?php
require('../actions/database/database.php');

$getAllMyArticles = $bdd->prepare('SELECT id, title, description, price, bin FROM articles WHERE id_auteur = ? ORDER BY id DESC');
$getAllMyArticles->execute(array($_SESSION['id']));