<?php
// Permet d'appeler l'action ou les actions et de les utiliser pour la base de données

// Allows you to call the action or actions and use it for the database

    require('../actions/securityAction.php');
    require('../actions/allPersonnalArticlesAction.php');
  
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
<!-- css necessaire -->

<!-- css needed -->    
<link rel="stylesheet" href="../styles/articles.css">
<link rel="stylesheet" href="../styles/all.css">
</head>

<body>

<!-- image necessaire pour l'animation de la barre de navigation via le script javascript voir Script.js ligne 46 to 55 -->

<!-- image needed for navigation bar animation via the javascript script see Script.js line 46 to 55 -->
<img class="Ufo" src="../images/soucoupe.gif">

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->
<?php include '../includes/navbar.php'; ?>


<!-- Video en background
 Video on background -->

<video id="background-video" autoplay loop muted>

<source src="../images/background3.mp4" type="video/mp4">

</video>

<!-- div necessaire pour suivre le mouvement de la souris via le script javascript voir Script.js ligne 46 to 55 -->

<!-- div neeeded to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->
<div class="mousemove"></div>

<!-- image necessaire qui suit le mouvement de la souris via le script javascript voir Script.js ligne 46 a 55 -->

<!-- image needed to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<img id="sprite2"  src="../images/goku.gif">

<!-- Conteneur global -->

<!-- Global container -->
<div class="block1">
    <div class="block-inside1">
    
    <?php 
            // Boucle tant que qui va permettre de recuperer les infos de l'article a chaque nouvel article qui appartient a l'utilisateur et de l'afficher

            // Loop as long as that will allow to recover the information of the article to each new article that belongs to the user and to display it
     while($myArticle = $getAllMyArticles->fetch()){
         ?>

         <!-- Conteneur qui va être crée a chaque nouvel article avec les infos du nouvel article a l'intérieur -->
            
            <!-- Container that will be created with each new article with the info of the new article inside -->
         <div class="menu-container">
            <div class="menu">
                <div class="menus">
                        <div class="topimg">

                            <!-- Redirection vers l'article selectionner sur une autre page en cliquant sur l'image -->

                            <!-- Redirect to article select on another page when you click on the image -->

                            <a href="ToArticle.php?id=<?= $myArticle['id']; ?>">

                            <!-- Affichage de l'image de l'article -->

                            <!-- Displaying the image of the article -->

                            <?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $myArticle['bin'] ) . '" />'; ?>
                            </a>

                            <br>

                            <!-- Affichage du titre de l'article -->

                            <!-- Displaying the title of the article -->
                            <h3><?= $myArticle['title']; ?> </h3>

                            <!-- Affichage du prix de l'article -->

                            <!-- Displaying the price of the article -->

                            <h3><?= $myArticle['price']; ?>€</h3>

                            <br>

                            <!-- Affichage de la description de l'article -->

                            <!-- Displaying the description of the article -->
                            <p class="description"><?= $myArticle['description']; ?></p>
                        </div>

          <!-- isset permet de savoir si la $_SESSION auth est definie

                isset lets you know if the $_SESSION auth is set -->      
                <?php 
                if(isset($_SESSION['auth'])){
                ?>
                    <!-- Effectue les actions ecrite dans le a sur la base de données en fonction de l'id de l'article ou renvoie a la page pour modifier l'article correspondant -->

                    <!-- Performs the actions written in the a on the database based on the article id or returns to the page to modify the corresponding article -->

                    <div class="button"><a href="ModifArticle.php?id=<?= $myArticle['id']; ?>" class="btn1">Modifier l'article</a></div>
                
                    <div class="button"><a href="../actions/deleteArticle.php?id=<?= $myArticle['id']; ?>" class="btn2">Supprimer l'article</a></div>
            
            <?php
        } 
          ?>
                </div>
             </div>
        </div>
        <?php
    }
    ?>
    </div>
</div>

<!-- Script js avec toutes les animations -->

<!-- Js script with all animations -->
<script src="../script/script.js"></script>            
</body>
</html>

