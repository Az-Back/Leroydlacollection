<?php
require('database.php');

$getInfoFav = $bdd->prepare('SELECT id, id_article, title, description, price, bin, pseudo_auteur, date_publication FROM favoris WHERE id_session = ? ORDER BY id DESC');
$getInfoFav->execute(array($_SESSION['id']));