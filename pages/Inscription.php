<?php 
// Permet d'appeler l'action et de l'utiliser pour la base de données

// Allows you to call the action and use it for the database 

require('../actions/users/signupAction.php');

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
    
    <link rel="stylesheet" href="../styles/formulaire.css">
    <link rel="icon" type="image/jpg" href="../images/logo.jpg" />

    <title>Inscription</title>
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
        <label for="lastname"></label>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="lastname" required="required" maxlength="10">
                        <span class="text">Nom</span>
                        <span class="line"></span>
                </div>
            </div>

 <!-- INPUT 2 --> 
        <label for="firstname"></label>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="firstname" required="required" maxlength="10">
                        <span class="text">Prenom</span>
                        <span class="line"></span>
                    </div>
                </div>

<!-- INPUT 3 -->                 
        <label for="pseudo"></label>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="text" name="pseudo" required="required" maxlength="10">
                    <span class="text">Pseudo</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 4 --> 
        <label for="password"></label>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="password" name="password" required="required" maxlength="10">
                    <span class="text">Mot de passe</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 5 -->             
        <label for="adress"></label>
            <div class="row100">
                 <div class="col">
                    <div class="inputBox">
                    <input type="text" name="adress" required="required" maxlength="30">
                    <span class="text">Adresse</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 6 -->   
        <label for="city"></label>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="text" name="city" required="required" maxlength="15">
                    <span class="text">Ville</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 7 --> 
        <label for="postal"></label>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="number" name="postal" required="required" maxlength="5" id="postal">
                    <span class="text">Code Postal</span>
                    <span class="line"></span>
                </div>
            </div>

<!-- INPUT 8, de type file pour pouvoir avoir un fichier "une image" -->

<!--  INPUT 8, of file type to be able to have a file "an image" --> 

            <div class="Image">
                <label for="image" class="form-label">Photo</label>
                <input type="file" class="form-image" name="image" accept="image/png, image/jpeg, image/jpg" max="1">
            </div>
</div>

<!-- INPUT 9, de type submit pour envoyer les données du formulaire -->

<!-- INPUT 9, of type submit to send the data of the form -->
        <label for="validate"></label>
            <div class="row100">
                <div class="col">
                    <input type="submit" name="validate" value="Inscription">
                </div>

<!-- Lien de redirection -->

<!-- Redirect link -->
                <div class="col">
                <a href="Connexion.php">J'ai deja un compte, je me connecte</a>

                <br><br>

                <a href="Accueil.php">Retour a l'accueil</a>
                </div>
            </div>
    </form>
<script src="../script/formulaire.js"></script>   
</body>
</html>