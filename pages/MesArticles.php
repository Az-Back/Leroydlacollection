<?php 
    require('../actions/securityAction.php');
    require('../actions/allPersonnalArticlesAction.php');
    $nomDeLaPage = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="../styles/articles.css">
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
    <?php 

     while($myArticle = $getAllMyArticles->fetch()){
         ?>
         <div class="menu-container">
            <div class="menu">
                <div class="menus">
                <div class="topimg">
                <a href="ToArticle.php?id=<?= $myArticle['id']; ?>"><?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $myArticle['bin'] ) . '" />'; ?></a>
                <h3><?= $myArticle['titre']; ?> </h3>
                <h3><?= $myArticle['contenu']; ?>€</h3>
                <p class="description"><?= $myArticle['description']; ?></p>
                </div>
                <?php 
        if(isset($_SESSION['auth'])){
          ?>
                
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
<script src="../script/script.js"></script>            
</body>
</html>