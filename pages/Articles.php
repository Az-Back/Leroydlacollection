<?php
    session_start(); 
    require('../actions/showAllArticles.php');
    $nomDeLaPage = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="fr">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/articles.css">
<link rel="stylesheet" href="../styles/all.css">
</head>
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
                <h3><?= $Article['title']; ?> </h3>
                <h3><?= $Article['price']; ?> €</h3>
                <p class="description"><?= $Article['description']; ?></p>
                <p class="By"> Publié par <?= $Article['pseudo_auteur']; ?> le <?= $Article['date_publication']; ?></p>
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
</body>
</html>