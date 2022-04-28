<?php require('../actions/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/formulaire.css">
</head>  
<body>
<br><br>
<video id="background-video" autoplay loop muted>

<source src="../images/background6.mp4" type="video/mp4">

</video>
    <form class="container" method="POST" enctype="multipart/form-data">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>

<div class="container">
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="lastname" required="required">
                        <span class="text">Nom</span>
                        <span class="line"></span>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="firstname" required="required">
                        <span class="text">Prenom</span>
                        <span class="line"></span>
                    </div>
                </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="text" name="pseudo" required="required">
                    <span class="text">Pseudo</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="password" name="password" required="required">
                    <span class="text">Password</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="row100">
                 <div class="col">
                    <div class="inputBox">
                    <input type="text" name="adress" required="required">
                    <span class="text">Adresse</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="text" name="city" required="required">
                    <span class="text">Ville</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                    <input type="number" name="postal" required="required">
                    <span class="text">Code Postal</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="Image">
                <label for="exampleInputEmail1" class="form-label">Photo</label>
                <input type="file" class="form-image" name="image">
            </div>
</div>

            <div class="row100">
                <div class="col">
                    <input type="submit" name="validate" value="Inscription">
            </div>
            <div class="col">
                <a href="Connexion.php">J'ai deja un compte, je me connecte</a>
            <br><br>
                <a href="Accueil.php">Retour a l'accueil</a>
            </div>
            </div>
    </form>
</body>
</html>