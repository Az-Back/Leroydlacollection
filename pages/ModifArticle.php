<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Permet de recuperer le nom de la page

// Allow to pick-up the name of the page

$nomDeLaPage = basename(__FILE__);

// Permet d'appeler l'action ou les actions et de les utiliser pour la base de données

// Allows you to call the action or actions and use it for the database 
require('../actions/securityAction.php');
require('../actions/getInfosOfEditedArticleAction.php');
require("../actions/modifArticleAction.php");     
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- css necessaire -->

<!-- css needed -->
    <link rel="stylesheet" href="../styles/formulaire2.css">
    <link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
</head>
<body>

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->

<?php include '../includes/navbar.php'; ?>  
<br><br>
    
<!-- Video en background
 Video on background -->

<video id="background-video" autoplay loop muted>

<source src="../images/background3.mp4" type="video/mp4">

</video>

<!-- Conteneur global -->

<!-- Global container -->
<div class="container2">

<!-- Conteneur qui represente le formulaire de modification d'article -->

    <!-- Container that represents the item change form -->

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
              echo '<p class="message">'.$errorMsg.'</p>';
            } elseif(isset($successMsg)) 
            {
              echo '<p class="message">'.$successMsg.'</p>';
            }
            ?>

<!-- INPUT 1 --> 
            <div class="Menu">
                    <label for="exampleInputEmail1" class="form-label">Titre de l'article</label>
                    <input type="text" class="form-control" name="title">
            </div>

<!-- INPUT 2 -->             

            <div class="Menu">
                    <label for="exampleInputEmail1" class="form-label">Description de l'article</label>
                    <textarea class="form-control" name="description"></textarea>
            </div>

<!-- INPUT 3 -->             

            <div class="Menu">
                    <label for="exampleInputEmail1" class="form-label">Prix de l'article</label>
                    <input type="number" class="form-control" name="price">
            </div>

<!-- INPUT 4, de type file pour pouvoir avoir un fichier "une image" -->

<!--  INPUT 4, of file type to be able to have a file "an image" -->         

            <div class="Menu">
                    <label for="exampleInputEmail1" class="form-label">Photo</label>
                    <input type="file" class="form-image" name="picture">
            </div>

<!-- INPUT 5, de type submit pour envoyer les données du formulaire -->

<!-- INPUT 5, of type submit to send the data of the form -->
            
            <div class="Menu">
                <br><br>
                <button type="submit" class="btn" name="validate">Modifier l'article</button>
            </div>
</div>        

</form>
</body>
</html>