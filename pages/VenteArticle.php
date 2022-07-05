<?php

// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Permet d'appeler l'action ou les actions et de les utiliser pour la base de données

// Allows you to call the action or actions and use it for the database 

require('../actions/security/securityAction.php');
require("../actions/articles/publishArticleAction.php");

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
    <meta name="description" content="Author: Leroy Bryan">
<!-- css necessaire -->

<!-- css needed -->  
    <link rel="stylesheet" href="../styles/formulaire2.css">
    <link rel="stylesheet" href="../styles/all.css">
    <link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="../images/logo.jpg" />

    <title>Vente Article</title>
</head>   
<body>

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->

<?php include '../includes/navbar.php'; ?>

<!-- image necessaire pour l'animation de la barre de navigation via le script javascript voir Script.js ligne 46 to 55 -->

<!-- image needed for navigation bar animation via the javascript script see Script.js line 46 to 55 -->

<img class="Ufo" src="../images/soucoupe.gif" alt="Ufo">

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

<img id="sprite"  src="../images/voiture.gif" alt="car">

<!-- Conteneur global -->

<!-- Global container -->

<div class="container2">
    

    <!-- Conteneur qui represente le formulaire de mise en vente -->

    <!-- Container that represents the sale form -->

    <!-- Methode POST pour envoyer des données dans la base de données -->

    <!-- Method POST to send data to the database -->

    <!-- Enctype permet d'envoyer n'importe quelle type de données, ici on en a besoin pour l'image -->

    <!-- Enctype allows to send any type of data, here we need it for the image -->

    <form method="POST" enctype="multipart/form-data">

            <!-- Permet d'afficher une message si la variable errorMsg ou successMsg et dependant si l'action a marcher ou non -->

            <!-- Displays a message if the variable errorMsg or successMsg and depending on whether the action has worked or not  -->

        <?php 
          if(
          isset($errorMsg))
          {
            echo '<p class="messageErr">'.$errorMsg.'</p>';
          } elseif(isset($successMsg)) 
          {
            echo '<p class="messageSucc">'.$successMsg.'</p>';
          }
          ?>
          <br>

<!-- INPUT 1 -->
   
    <div class="Menu">
            <label for="title" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="title" maxlength="20">
    </div>

<!-- INPUT 2 -->  

    <div class="Menu">
            <label for="description" class="form-label">Description de l'article</label>
            <textarea class="form-control" name="description" maxlength="150"></textarea>
    </div>

<!-- INPUT 3 -->

    <div class="Menu">
            <label for="price" class="form-label">Prix de l'article</label>
            <input type='number' class="form-control" name="price" min="1" placeholder=" 7 chiffres max" id="price">
    </div>

<!-- INPUT 4, de type file pour pouvoir avoir un fichier "une image" -->

<!--  INPUT 4, of file type to be able to have a file "an image" --> 

    <div class="Menu">
            <label for="picture" class="form-label">Photo</label>
            <input type="file" class="form-image" name="picture" accept="image/png, image/jpeg, image/jpg" required="required">
    </div>

<!-- INPUT 5, de type submit pour envoyer les données du formulaire -->

<!-- INPUT 5, of type submit to send the data of the form -->

    <div class="Menu">
      <br><br>
        <button type="submit" class="btn" name="validate">Vendre l'article</button>
    </div>

</div>        

</form>
<script src="../script/script.js"></script>
<script src="../script/formulaire2.js"></script>    
</body>
</html>

