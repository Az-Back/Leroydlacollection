<?php
    session_start(); 
    require('../actions/showAllArticles.php');
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

        while($Article = $getAllArticles->fetch()){
    ?>
        <div class="menu-container">
            <div class="menu">
                 <div class="menus">
                    <div class="topimg">
                        <a href="ToArticle.php?id=<?= $Article['id']; ?>"><?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $Article['bin'] ) . '" />'; ?></a>
                        <h3><?= $Article['titre']; ?> </h3>
                        <h3><?= $Article['contenu']; ?> €</h3>
                        <p class="description"><?= $Article['description']; ?></p>
                        <p class="By"> Publié par <?= $Article['pseudo_auteur']; ?> le <?= $Article['date_publication']; ?></p>
                        <div class="button"><a href="ToArticle.php?id=<?= $Article['id']; ?>" class="btn1">Voir l'article</a></div>
                    </div>
           <?php 
   if(isset($_SESSION['auth'])){
     ?>
           
           <div class="button"><a href="../actions/deleteArticle.php?id=<?= $Article['id']; ?>" class="btn0">Acheter l'article</a></div>
       
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