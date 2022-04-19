<?php
session_start(); 
    require('../actions/showArticleContent.php');
    $nomDeLaPage = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="../styles/toArticle.css">
<link rel="stylesheet" href="../styles/index.css">
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
         <div class="menu-container">
            <div class="menu">
                <div class="topimg">
                <?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $article_image_bin) . '" />'; ?>
                <h3 class="titre"><?= $article_title ?> </h3>
                <h3 class="contenu"><?= $article_content ?> €</h3>
                <p class="description"><?= $article_description ?></p>
                <p class="By"> Publié par <?= $article_pseudo_author ?> le <?= $article_publication_date ?></p>
                </div>
                <?php 
        if(isset($_SESSION['auth'])){
          ?>
                
                <div class="button"><a href="" class="btn0">Acheter l'article</a></div>
            
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