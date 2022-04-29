<?php
session_start();
$nomDeLaPage = basename(__FILE__);
require("../actions/getAllInfoUser.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/utilisateur.css">
    <link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
    <title>Leroy d'la collection</title>
</head>
<body>
<img class="Ufo" src="../images/soucoupe.gif">
<?php include '../includes/navbar.php'; ?>

<video id="background-video" autoplay loop muted>

<source src="../images/background1.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">

<div class="block2">
    <div class="block-inside2">
    <?php 

    $user = $getInfoOfUser->fetch()
        ?>

        <div class="profil-container">
            <div class="profil">
                    <div class="info">
                    <?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $user['bin'] ) . '" />'; ?></a>
                    <div class="TextNav"><a class="RefUse" href="../actions/logoutAction.php">Deconnexion</a><div>
                    <div class="MyArticles"><a class="RefUse" href="../pages/MesArticles.php">Mes Articles</a></div>
                    <div class="MyCommandes"><a class="RefUse" href="../pages/MesCommandes.php">Mes Commandes</a></div>
                        <h3>Nom: 
                            <br><br>
                            <?= $user['lastname']; ?>
                            <br><br> 
                        </h3>

                                <h3>Prenom: 
                                    <br><br>
                                    <?= $user['firstname']; ?>
                                    <br><br> 
                                </h3>

                                    <p class="Adress">Adresse: 
                                        <br><br>
                                    <?= $user['adress']; ?>
                                    <br><br>
                                    </p>

                                        <p class="City">
                                        Ville:
                                        <br><br>  
                                        <?= $user['city']; ?>
                                        <br><br>
                                        </p>
                                        
                                            <p class="Postal">
                                            Code postal:
                                            <br><br> 
                                            <?= $user['postal']; ?>
                                            </p>
                    </div>
                    <?php
     ?>
    </div>
</div>
<script src="../script/script.js"></script>
</body>
</html>