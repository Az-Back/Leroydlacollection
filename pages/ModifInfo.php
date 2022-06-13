<?php
session_start(); 
// Permet d'appeler l'action et de l'utiliser pour la base de données

// Allows you to call the action and use it for the database 
require('../actions/users/getAllInfoUserAction.php');
require('../actions/users/modifInfoUserAction.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- css necessaire -->

<!-- css needed -->
    
<link rel="stylesheet" href="../styles/formulaire.css">
</head>  
<body>
<br><br>

<!-- Video en arrière-plan
 Video on background -->

<video id="background-video" autoplay loop muted>

<source src="../images/background6.mp4" type="video/mp4">

</video>

    <!-- Conteneur qui represente le formulaire d'inscription -->

    <!-- Container that represents the registration form -->

    <!-- Methode POST pour envoyer des données dans la base de données -->

    <!-- Method POST to send data to the database -->

    <!-- Enctype permet d'envoyer n'importe quelle type de données, ici on en a besoin pour l'image -->

    <!-- Enctype allows to send any type of data, here we need it for the image -->

    <form class="container" method="POST" enctype="multipart/form-data">

<!-- Permet d'afficher une message si la variable errorMsg existe -->

<!-- Displays a message if the errorMsg variable exists  -->

    <?php if(isset($errorMsg)){echo '<p class="messageErr">'.$errorMsg.'</p>';} ?>


<!-- Conteneur global -->

<!-- Global container -->

<div class="container">

<!-- INPUT 1 --> 

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="lastname" required="required" maxlength="10">
                        <span class="text">Nom</span>
                        <span class="line"></span>
                </div>
            </div>

 <!-- INPUT 2 --> 

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="firstname" required="required" maxlength="10">
                        <span class="text">Prenom</span>
                        <span class="line"></span>
                    </div>
                </div>

<!-- INPUT 3 -->                 

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="text" name="pseudo" required="required" maxlength="10">
                    <span class="text">Pseudo</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 4 --> 

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="password" name="password" required="required" maxlength="10">
                    <span class="text">Password</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 5 -->             

            <div class="row100">
                 <div class="col">
                    <div class="inputBox">
                    <input type="text" name="adress" required="required" maxlength="30">
                    <span class="text">Adresse</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 6 -->   
            
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="text" name="city" required="required" maxlength="15">
                    <span class="text">Ville</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 7 --> 

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="number" name="postal" id="postal" required="required">
                    <span class="text">Code Postal</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 8, de type file pour pouvoir avoir un fichier "une image" -->

<!--  INPUT 8, of file type to be able to have a file "an image" --> 

            <div class="Image">
                <label for="exampleInputEmail1" class="form-label">Photo</label>
                <input type="file" class="form-image" name="image" accept="image/png, image/jpeg, image/jpg" max="1">
            </div>
</div>

<!-- INPUT 9, de type submit pour envoyer les données du formulaire -->

<!-- INPUT 9, of type submit to send the data of the form -->
            <div class="row100">
                <div class="col">
                    <input type="submit" name="validate" value="Modifier">
                </div>

<!-- Lien de redirection -->

<!-- Redirect link -->
                <div class="col">
                <a href="Utilisateur.php">Retour a utilisateur</a>
                </div>
            </div>
    </form>
<script src="../script/formulaire.js"></script>    
</body>
</html>