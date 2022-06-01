<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session
session_start();

// Permet d'appeler l'action et de l'utiliser pour la base de données

// Allows you to call the action and use it for the database 

require('../actions/articles/showArticleContent.php');

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
    <link rel="stylesheet" href="../styles/toArticle.css">
    <link rel="stylesheet" href="../styles/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

<source src="../images/background3.mp4" type="video/mp4">

</video>

<!-- div necessaire pour suivre le mouvement de la souris via le script javascript voir Script.js ligne 46 to 55 -->

<!-- div neeeded to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<div class="mousemove"></div>

<!-- image necessaire qui suit le mouvement de la souris via le script javascript voir Script.js ligne 46 a 55 -->

<!-- image needed to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<img id="sprite"  src="../images/voiture.gif">

<!-- Permet d'afficher une message si la variable errorMsg existe -->

<!-- Displays a message if the errorMsg variable exists  -->

<?php if(isset($errorMsg)){echo '<p class="message">'.$errorMsg.'</p>';} ?>

<!-- Conteneur global -->

<!-- Global container -->
<div class="block1">
    <div class="block-inside1">
         <div class="menu-container">
            <div class="menu">
                    <div class="topimg">
                            <!-- Affichage de l'image de l'article -->

                            <!-- Displaying the image of the article -->

                            <?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $article_image_bin) . '" />'; ?>

                            <br>

                            <!-- Affichage du titre de l'article -->

                            <!-- Displaying the title of the article -->

                            <h3 class="titre"><?= $article_title ?> </h3>

                            <!-- Affichage du prix de l'article -->

                            <!-- Displaying the price of the article -->

                            <h3 class="contenu"><?= number_format($article_price, 2);?> €</h3>

                            <br>

                            <!-- Affichage de la description de l'article -->

                            <!-- Displaying the description of the article -->

                            <p class="description"><?= $article_description ?></p>

                            <br>

                            <!-- Affichage du pseudo du vendeur ainsi que la date de publication de l'article -->

                            <!-- Display of the seller’s nickname and the publication date of the article -->
                            <p class="By"> Publié par <?= $article_pseudo_author ?> le <?= $article_publication_date ?></p>

                            <!-- Lien de redirection -->

                            <!-- Redirect link -->
                            <div class="button"><a href="Articles.php" class="btn1">Retour en arriére</a></div>
                    </div>
               
              <!-- isset permet de savoir si la $_SESSION auth est definie

                isset lets you know if the $_SESSION auth is set --> 

               <?php  
                  if(isset($_SESSION['auth'])){
                ?>

                  <!-- Effectue les actions ecrite dans le a sur la base de données en fonction de l'id de l'article -->

                  <!-- Performs the actions written in the a on the database based on the article id -->
                  <div class="button"><a href="../actions/fav/addFav.php?id=<?= $article_id; ?>" class="btn2">Ajouter au favoris</a></div>
                  <div class="button"><a href="../actions/articles/buyArticle.php?id=<?= $article_id; ?>" class="btn0">Acheter l'article</a></div>
                <?php
        }
          ?>
            </div>
          </div>
        </div>
    </div>
</div>
<script src="../script/script.js"></script>
          
</body>
</html>