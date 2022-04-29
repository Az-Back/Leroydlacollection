<?php
    session_start(); 
    require('../actions/getFav.php');
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

<source src="../images/background4.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">



<div class="block1">
    <div class="block-inside1">

    <?php 
        while($Fav = $getInfoFav->fetch()){
        ?>
        <div class="menu-container">
            <div class="menu">
                <div class="menus">
                <div class="topimg">
                <a href="ToArticle.php?id=<?= $Fav['id']; ?>"><?= '<img class="allimg" src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $Fav['bin'] ) . '" />'; ?></a>
                <h3><?= $Fav['title']; ?> </h3>
                <h3><?= $Fav['price']; ?> €</h3>
                <p class="description"><?= $Fav['description']; ?></p>
                <p class="By"> Publié par <?= $Fav['pseudo_auteur']; ?> le <?= $Fav['date_publication']; ?></p>
                <div class="button"><a href="ToArticleFav.php?id=<?= $Fav['id']; ?>" class="btn1">Voir l'article</a></div>
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