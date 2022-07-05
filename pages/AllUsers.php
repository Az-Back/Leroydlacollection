<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session
    session_start();
    
// Permet d'appeler l'action et de l'utiliser pour la base de données

// Allows you to call the action and use it for the database 

require('../actions/security/securityAction2.php');
    
require('../actions/users/showAllUsersAction.php');

// Permet de recuperer le nom de la page

// Allow to pick-up the name of the page

    $nomDeLaPage = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="fr">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Author: Leroy Bryan">
<!-- css necessaire -->

<!-- css needed -->
    <link rel="stylesheet" href="../styles/articles.css">
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="icon" type="image/jpg" href="../images/logo.jpg" />

    <title>All Users</title>

</head>
<body>
<!-- image necessaire pour l'animation de la barre de navigation via le script javascript voir Script.js ligne 46 to 55 -->

<!-- image needed for navigation bar animation via the javascript script see Script.js line 46 to 55 -->    
<img class="Ufo" src="../images/soucoupe.gif" alt="Ufo">

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->

<?php include '../includes/navbar.php'; ?>

<!-- Video en arrière-plan
 Video on background -->

<video id="background-video" autoplay loop muted>

<source src="../images/background4.mp4" type="video/mp4">

</video>

<!-- div necessaire pour suivre le mouvement de la souris via le script javascript voir Script.js ligne 46 to 55 -->

<!-- div neeeded to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<div class="mousemove"></div>

<!-- image necessaire qui suit le mouvement de la souris via le script javascript voir Script.js ligne 46 a 55 -->

<!-- image needed to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<img id="sprite"  src="../images/voiture.gif" alt="car">


<!-- Conteneur global -->

<!-- Global container -->

    <div class="block1">
        <div class="block-inside1">

        <?php 
            // Boucle tant que qui va permettre de recuperer les infos de l'utilisateur pour chaque utilisateur

            // Loop as long as that will make it possible to recover the information of the user for each user

            while($userS = $getAllUsers->fetch()){
        ?>

            <!-- Conteneur qui va être crée pour chaque utilisatuer avec les infos de l'utilisateur a l'intérieur -->
            
            <!-- Container that will be created for each user to kill with the information of the user inside -->


            <div class="menu-container">
            <div class="gateclose"> <img class="Gate" src="../images/gate.gif"></div>
                <div class="menu">
                    <div class="menus">
                        <div class="topimg">

                            <!-- Affichage de l'image de l'utilisateur -->

                            <!-- Displaying the image of the user -->

                            <?= '<img class="allimg clickimage" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $userS['bin'] ) . '" />'; ?>

                            <br>

                            <!-- Affichage du pseudo de l'utilisateur -->

                            <!-- Displaying the user’s nickname -->

                            <h3><?= $userS['pseudo']; ?> </h3>


                            <!-- Affichage du nom de famille de l'utilisateur -->

                            <!-- Displaying the user lastname-->

                            <h3><?= $userS['lastname'] ?> </h3>

                            <br>

                            <!-- Affichage du prenom de l'utilisateur -->

                            <!-- Displaying the user firtsname -->

                            <h3><?= $userS['firstname']; ?></h3>

                            <br>

                            <!-- Suppression de l'utilisateur -->

                            <!-- Removal the user -->
                            
                            <div class="button" id="suppr"><a href="../actions/users/deleteUsersAdminAction.php?id=<?= $userS['id']; ?>" class="btn2">Supprimer l'utilisateur</a></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>
        </div>
    </div>
<script src="../script/script.js"></script>
<script src="../script/articles.js"></script>              
</body>
</html>