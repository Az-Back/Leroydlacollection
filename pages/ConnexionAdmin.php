<?php 

// Permet d'appeler l'action et de l'utiliser pour la base de données

// Allows you to call the action and use it for the database 

require('../actions/users/loginAdminAction.php'); ?>

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

  <title>Connexion Admin</title>
</head>  
<body>
<br><br>

<!-- Video en arrière-plan
 Video on background -->
<video id="background-video" autoplay loop muted>

<source src="../images/background6.mp4" type="video/mp4">

</video>

<!-- Conteneur qui represente le formulaire de connexion -->

<!-- Container that represents the connexion form -->

<!-- Methode POST pour envoyer des données dans la base de données -->

<!-- Method POST to send data to the database -->

    <form class="container" method="POST">


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
                        <input type="text" name="pseudo" required="required">
                        <span class="text">Pseudo</span>
                        <span class="line"></span>
                    </div>
                </div>

<!-- INPUT 2 -->  

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="password" name="password" required="required">
                        <span class="text">Mot de passe</span>
                        <span class="line"></span>
                    </div>
                </div>

<!-- INPUT 3 --> 


            <div class="row100">
                        <div class="col">
                            <input type="submit" id="Connect" name="validate" value="Connexion">
                            <div class="col">
                            <a href="Accueil.php">Retour a l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
    
    </div>
</div>
</form>
    
</body>
</html>