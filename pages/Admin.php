<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Permet de recuperer le nom de la page

// Allow to pick-up the name of the page

$nomDeLaPage = basename(__FILE__);

// Permet d'appeler l'action et de l'utiliser pour la base de données

// Allows you to call the action and use it for the database

require("../actions/security/securityAction2.php"); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- css necessaire -->

<!-- css needed -->
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/utilisateur.css">
</head>
<body>

<!-- image necessaire pour l'animation de la barre de navigation via le script javascript voir Script.js ligne 46 to 55 -->

<!-- image needed for navigation bar animation via the javascript script see Script.js line 46 to 55 -->

<img class="Ufo" src="../images/soucoupe.gif">

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->

<?php include '../includes/navbar.php'; ?>

<!-- Video en arrière-plan
 Video on background -->

<video id="background-video" autoplay loop muted>

<source src="../images/background1.mp4" type="video/mp4">

</video>

<!-- div necessaire pour suivre le mouvement de la souris via le script javascript voir Script.js ligne 46 to 55 -->

<!-- div neeeded to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<div class="mousemove"></div>

<!-- image necessaire qui suit le mouvement de la souris via le script javascript voir Script.js ligne 46 a 55 -->

<!-- image needed to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<img id="sprite"  src="../images/voiture.gif">

<!-- Conteneur global -->

<!-- Global container -->

<div class="block2">
    <div class="block-inside2">
                    <div class="profil-container">
                        <div class="profil">
                                <div class="info">

                                <div><a class="RefUse" href="../actions/users/logoutAction.php">Deconnexion</a><div>

                                <div><a class="RefUse" href="../pages/AllArticles.php">Les Articles</a></div>

                                <div><a class="RefUse" href="../pages/AllCommands.php">Les Commandes</a></div>  

                                </div>
                        </div>
                    </div>
</div>
</div>


<!-- Script js avec toutes les animations -->

<!-- Js script with all animations -->
<script src="../script/script.js"></script>
</body>
</html>