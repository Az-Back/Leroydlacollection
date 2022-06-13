<?php
// Permet de demarrer une session

// Allows you to start a session

session_start();


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

<!-- css necessaire -->

<!-- css needed -->

    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/contact.css">


    <title>Contact</title>
</head>
<body>

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->
<?php include '../includes/navbar.php'; ?>

<!-- image necessaire pour l'animation de la barre de navigation via le script javascript voir Script.js ligne 46 to 55 -->

<!-- image needed for navigation bar animation via the javascript script see Script.js line 46 to 55 -->
<img class="Ufo" src="../images/soucoupe.gif">


<!-- Video en arrière-plan
 Video on background -->

<video id="background-video" autoplay loop muted>

<source src="../images/background0.mp4" type="video/mp4">

</video>

<!-- div necessaire pour suivre le mouvement de la souris via le script javascript voir Script.js ligne 46 to 55 -->

<!-- div neeeded to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<div class="mousemove"></div>

<!-- image necessaire qui suit le mouvement de la souris via le script javascript voir Script.js ligne 46 a 55 -->

<!-- image needed to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<img id="sprite"  src="../images/voiture.gif">


<!-- Premier conteneur -->

<!-- First container -->

<div class="Container">
    <div class="Text1Contact">
        <h1 class="Title1Contact">RETROUVEZ-NOUS <br> SUR <br><br>
            <a class="facebook" href="https://www.facebook.com/LEROYDLACOLLECTION1" target="blank"> 
                <img class="goku1" src="../images/goku1.gif">
                <i id="facebook" class="fa-brands fa-facebook"></i>
                <img class="goku2" src="../images/goku2.gif">
            </a>
        </h1>
    </div>

    <div class="Text2Contact">

    <h2 class="Title2Contact"> MAIS AUSSI SUR PLACE <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2555.2697537562462!2d3.2309620158885908!3d50.17479251506956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2bb7959929bcd%3A0x1735543611f96fc5!2s6%20Rue%20des%20R%C3%B4tisseurs%2C%2059400%20Cambrai!5e0!3m2!1sfr!2sfr!4v1651582772929!5m2!1sfr!2sfr" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></h2>
    </div>
</div>


<!-- Script js avec toutes les animations -->

<!-- Js script with all animations -->
<script src="../script/script.js"></script>
<script src="../script/contact.js"></script>
</body>
</html>