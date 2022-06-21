<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Permet de recuperer le nom de la page

// Allow to pick-up the name of the page

$nomDeLaPage = basename(__FILE__);

// Permet d'appeler l'action ou les actions et de les utiliser pour la base de données

// Allows you to call the action or actions and use it for the database


require("../actions/security/securityAction.php");
require("../actions/panier/getAllArticlesPan.php");
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
    <link rel="stylesheet" href="../styles/commandes.css">
    <title>Document</title>
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

<source src="../images/background0.mp4" type="video/mp4">

</video>

<!-- div necessaire pour suivre le mouvement de la souris via le script javascript voir Script.js ligne 46 to 55 -->

<!-- div neeeded to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<div class="mousemove"></div>

<!-- image necessaire qui suit le mouvement de la souris via le script javascript voir Script.js ligne 46 a 55 -->

<!-- image needed to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<img id="sprite"  src="../images/voiture.gif">

<!-- Conteneur global -->

<!-- Global container -->

<div class="block1">
    <div class="block-inside1">

                <!-- Conteneur qui va être crée a chaque nouvelle commande avec les infos de la nouvelle commande a l'intérieur -->
            
                <!-- Container that will be created with each new order with the information of the new order inside -->
                <div class="menu-container">
                        <div class="menu">
                            <div class="up">    

                            <!-- Creation d'un tableau qui va comporter 6 champs a remplir avec les données recupérer dans la base de données -->

                            <!-- Creation of a table that will have 6 fields to fill with the data retrieved in the database -->
                            <table class="table-style">

                            <thead>
                                <tr>
                                    
                                    <th>Numéro Article</th>
                                    <th>Image</th>
                                    <th>Titre Article</th>
                                    <th>Prix Article</th>
                                    <th>Pseudo_Vendeur</th>
                                    <th><a href="Utilisateur.php" class="btn3 btnloc"><i id="shop" class="fa-solid fa-cart-arrow-down"></i></a></th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php  foreach($arts as $art){
                                    ?>
                                <tr>
                                
                                    
                                    <td><?= $art['id_article']; ?></td>
                                    <td><?= '<img class="tableimage" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $art['bin'] ) . '" />'; ?>
                                    <td><?= $art['title']; ?></td>
                                    <td><?= number_format($art['price'], 2,","," "); ?> €</td>
                                    <td><?= $art['pseudo_auteur']; ?></td>
                                    <div id="myModal" class="modal">
                                        <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                    </div>
                                    <td><a href="../actions/panier/deletePanierAction.php?id=<?= $art['id']; ?>" class="btn3"><i id="cross" class="fa-solid fa-xmark"></i></a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                            
                            
</table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Script js avec toutes les animations -->

<!-- Js script with all animations -->
<script src="../script/script.js"></script>
<script src="../script/panier.js"></script>
<script src="../script/modal.js"></script>
</body>
</html>