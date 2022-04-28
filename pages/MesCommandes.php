<?php
session_start();
$nomDeLaPage = basename(__FILE__);
require("../actions/getCommands.php");
require("../actions/deleteCommands.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/commandes.css">
    <title>Document</title>
</head>
<body>
<img class="Ufo" src="../images/soucoupe.gif">
<?php include '../includes/navbar.php'; ?>

<video id="background-video" autoplay loop muted>

<source src="../images/background2.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">

<div class="block1">
    <div class="block-inside1">
    <?php 
        while($Commande = $getInfoCommand->fetch()){
        ?>
    <div class="menu-container">
            <div class="menu">
                <div class="menus">    
<table class="table-style">

<thead>
    <tr>
        <th>Numéro Commande</th>
        <th>Numéro Article</th>
        <th>Titre Article</th>
        <th>Prix Article</th>
        <th>Pseudo_Vendeur</th>
        <th>Date Achat</th>
    </tr>
</thead>


<tbody>
    <tr>
    
        <td><?= $Commande['id']; ?></td>
        <td><?= $Commande['id_article']; ?></td>
        <td><?= $Commande['title']; ?></td>
        <td><?= $Commande['price']; ?> €</td>
        <td><?= $Commande['pseudo_auteur']; ?></td>
        <td><?= $Commande['date_buy']; ?></td>
        
    </tr>
</tbody>
<div class="button"><a href="../actions/deleteCommands.php?id=<?= $Commande['id']; ?>" class="btn2">Supprimer la commande</a></div>
</table>
                </div>
            </div>
        </div>
    <?php
     }
?>
    </div>
</div>

<script src="../script/script.js"></script>
</body>
</html>