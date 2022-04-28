<?php
$nomDeLaPage = basename(__FILE__); 
require('../actions/securityAction.php');
require('../actions/getInfosOfEditedQuestionAction.php');
require("../actions/modifArticleAction.php");     
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/formulaire2.css">
    <link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
</head>
<?php include '../includes/navbar.php'; ?>
<body>
<br><br>
    
<video id="background-video" autoplay loop muted>

<source src="../images/background3.mp4" type="video/mp4">

</video>
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
            <input type="number" class="form-control" name="price">
    </div>

    <div class="Menu">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-image" name="picture">
    </div>
    <div class="Menu">
      <br><br>
        <button type="submit" class="btn" name="validate">Modifier l'article</button>
    </div>
</div>        

</form>
</body>
</html>