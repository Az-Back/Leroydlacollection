<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

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

    <link rel="stylesheet" href="../styles/apropos.css">
    <link rel="stylesheet" href="../styles/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="../images/logo.jpg" />


    <title>A propos</title>
</head>
<body>
<!-- image necessaire pour l'animation de la barre de navigation via le script javascript voir Script.js ligne 46 to 55 -->

<!-- image needed for navigation bar animation via the javascript script see Script.js line 46 to 55 -->

<img class="Ufo" src="../images/soucoupe.gif">

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->

<?php include '../includes/navbar.php'; ?>

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

<img id="sprite"  src="../images/voiture.gif">


<!-- Premier conteneur -->

<!-- First container -->

      <div class="Head">
              <div class="HeadDiscover">
                  <h1 class="Discover1">
                  DECOUVREZ NOTRE BOUTIQUE
                  </h1>
              </div>
              <div class="banner">
                  <a href="#presentation"><h2>
                    →&nbsp;ICI&nbsp;←
                  </h2></a>   
              </div>
      </div>

<!-- Deuxiéme conteneur !-->

<!-- Second container !-->

      <div class="case" id="presentation" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
              <div class="video">
                <h1 class="titlevideo">Video de présentation</h1>
              </div>
              <div>
                <video id="presentation-video" controls width="250" muted>

                <source src="../images/présentation.mp4" type="video/mp4">

                </video>
              </div>
       </div>


<div class="BlockTitleSlider"><h1 class="titleslider">Galerie d'articles</h1></div>
<!-- Troisiéme conteneur !-->

<!-- Third container !-->

<!-- Carrousel -->

<div class="container">
    <div class="slider">
      <img class="active slide" src="../images/E.T.jpg">
      <img class="slide" src="../images/batf.jpg">
      <img class="slide" src="../images/bonnenuit.jpg">
      <img class="slide" src="../images/alien.jpg">
      <img class="slide" src="../images/train.jpg">
      <img class="slide" src="../images/wow.jpg">
      <img class="slide" src="../images/goldorak.jpg">
      <img class="slide" src="../images/grue.jpg">
      <img class="slide" src="../images/console.jpg">
      <img class="slide" src="../images/camion.jpg">
      <img class="slide" src="../images/starwars.jpg">
    </div>

    <div class="cont-btn">
      <div class="btn-nav left">←</div>
      <div class="btn-nav right">→</div>
    </div>

</div>  

<!-- Script aos et slider necessaire pour le carrousel et les animations d'AOS -->

<!-- Script aos and slider needed for carousel and AOS animations -->
<script src="../script/script.js"></script>
<script src="../script/slider.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Permet de lancer la librairie AOS pour les animations data-aos, data-aos-easing -->

<!-- For launch AOS animations data-aos, data-aos-easing -->
<script>
  AOS.init();
</script> 
</body>
</html>