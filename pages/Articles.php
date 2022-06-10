<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session
    session_start();
    
// Permet d'appeler l'action et de l'utiliser pour la base de données

// Allows you to call the action and use it for the database 
    
    require('../actions/articles/showAllArticlesAction.php');

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

<img id="sprite"  src="../images/voiture.gif">


<!-- Conteneur global -->

<!-- Global container -->

    <div class="block1">
        <div class="block-inside1">

        <?php 
            // Boucle tant que qui va permettre de recuperer les infos de l'article a chaque nouvel article crée et de l'afficher

            // Loop as long as that will allow to recover the info of the article has each new article created and to display it
            while($Article = $getAllArticles->fetch()){
        ?>

            <!-- Conteneur qui va être crée a chaque nouvel article avec les infos du nouvel article a l'intérieur -->
            
            <!-- Container that will be created with each new article with the info of the new article inside -->


            <div class="menu-container">
            
                <div class="menu">
                
                    <div class="menus">
                    
                        <div class="topimg">
                        
                        
                            <!-- Redirection vers l'article selectionner sur une autre page en cliquant sur l'image -->

                            <!-- Redirect to article select on another page when you click on the image -->

                            <a href="ToArticle.php?id=<?= $Article['id']; ?>">

                            <!-- Affichage de l'image de l'article -->

                            <!-- Displaying the image of the article -->
                            <?= '<img class="allimg clickimage" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $Article['bin'] ) . '" />'; ?>
                            </a>

                            <br>

                            <!-- Affichage du titre de l'article -->

                            <!-- Displaying the title of the article -->

                            <h3><?= $Article['title']; ?> </h3>


                            <!-- Affichage du prix de l'article -->

                            <!-- Displaying the price of the article -->

                            <h3><?= number_format($Article['price'], 2); ?> €</h3>

                            <br>

                            <!-- Affichage de la description de l'article -->

                            <!-- Displaying the description of the article -->

                            <p class="description" id="desc"><?= $Article['description']; ?></p>

                            <br>

                            <!-- Affichage du pseudo du vendeur ainsi que la date de publication de l'article -->

                            <!-- Display of the seller’s nickname and the publication date of the article -->
                            <p class="By"> Publié par <?= $Article['pseudo_auteur']; ?> <br>le <?= $Article['date_publication']; ?></p>

                            <!-- Redirection vers l'article selectionner sur une autre page en cliquant sur le bouton -->

                            <!-- Redirect to article select on another page when you click on the button -->
                            <div class="button"><a href="ToArticle.php?id=<?= $Article['id']; ?>" class="btn1">Voir l'article</a></div>
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