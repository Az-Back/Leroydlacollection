<?php require('../actions/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../styles/formulaire.css">
</head>  
<body>
<br><br>
<video id="background-video" autoplay loop muted>

<source src="../images/background.mp4" type="video/mp4">

</video>
    <form class="container" method="POST">

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';} ?>

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
   <input type="submit" name="validate" value="Connexion">
   <div class="col">
   <a href="Inscription.php">Je n'ai pas de compte, je m'inscris</a>
   <br><br>
   <a href="Accueil.php">Retour a l'accueil</a>
    </div>
    </div>
    </form>
    </div>
</body>
</html>