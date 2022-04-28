<?php require('../actions/loginAction.php'); ?>
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
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p class="message">'.$errorMsg.'</p>';} ?>

    <div class="container">
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
   <input type="submit" id="Connect" name="validate" value="Connexion">
   <div class="col">
   <a href="Inscription.php">Je n'ai pas de compte, je m'inscris</a>
   <br><br>
   <a href="Accueil.php">Retour a l'accueil</a>
    </div>
    </div>
    </form>
    </div>
    <audio id="audio1" src="../Sound/Bienvenue.mp3"></audio>
<script src="../script/connect.js"></script>    
</body>
</html>