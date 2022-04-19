<?php 
require('../actions/securityAction.php');
require("../actions/publishArticleAction.php");
$nomDeLaPage = basename(__FILE__);     
?>
<link rel="stylesheet" href="../styles/formulaire2.css">
<link rel="stylesheet" href="../styles/index.css">
<link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
<!DOCTYPE html>
<html lang="fr">
<?php include '../includes/navbar.php'; ?>
<body>
<img class="Ufo" src="../images/soucoupe.gif">

<video id="background-video" autoplay loop muted>

<source src="../images/background2.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">
<div class="container2">
<form method="POST" enctype="multipart/form-data">
    <?php if(
      isset($errorMsg))
      {
        echo '<p class="message">'.$errorMsg.'</p>';
      } elseif(isset($successMsg)) 
      {
        echo '<p class="message">'.$successMsg.'</p>';
      }
      ?>


    <div class="Menu">
            <label for="exampleInputEmail1" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="title">
    </div>

    <div class="Menu">
            <label for="exampleInputEmail1" class="form-label">Description de l'article</label>
            <textarea class="form-control" name="description"></textarea>
    </div>

    <div class="Menu">
            <label for="exampleInputEmail1" class="form-label">Prix de l'article</label>
            <input type="number" class="form-control" name="content">
    </div>

    <div class="Menu">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-image" name="picture">
    </div>
    <div class="Menu">
      <br><br>
        <button type="submit" class="btn" name="validate">Vendre l'article</button>
    </div>
</div>        

</form>
<script src="../script/script.js"></script>
</body>
</html>