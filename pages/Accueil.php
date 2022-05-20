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
    <link rel="stylesheet" href="../styles/accueil.css">
    <link rel="stylesheet" href="../styles/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
    
    <title>Leroy d'la collection</title>
</head>
<body>
 
<!-- image necessaire pour l'animation de la barre de navigation via le script javascript voir Script.js ligne 46 to 55 -->

<!-- image needed for navigation bar animation via the javascript script see Script.js line 46 to 55 -->

<img class="Ufo" src="../images/soucoupe.gif">

<!-- Permet d'inclure la barre de navigation dans la page sans recopier tout le code -->

<!-- Allows to include the navigation bar in the page without copying all the code -->

<?php include '../includes/navbar.php'; ?>

<!-- Video en background
 Video on background -->

<video id="background-video" autoplay loop muted>

<source src="../images/background1.mp4" type="video/mp4">

</video>

<!-- div necessaire pour suivre le mouvement de la souris via le script javascript voir Script.js ligne 46 to 55 -->

<!-- div neeeded to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<div class="mousemove"></div>

<!-- image necessaire qui suit le mouvement de la souris via le script javascript voir Script.js ligne 46 a 55 -->

<!-- image needed to follow the movement of the mouse via the javascript script see Script.js line 46 to 55 -->

<img id="sprite2"  src="../images/goku.gif">


<!-- Premier conteneur -->

<!-- First container -->

    <div class="ContainerHome">

<!-- Div necessaire pour le Typescript voir Script.js ligne 58 a 73 -->

<!-- Div needed for Typescript see Script.js line 58 to 73 -->
      <div class="Text"></div>

      
        <div class="Scroll"><a href="#Infos" class="Fleche">
          <div class="arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </a></div>
    </div>

<!-- Deuxiéme conteneur !-->

<!-- Second container !-->

<div class="case">

<!-- Premier titre -->

<!-- First title -->

    <div class="Infos1" id="Infos" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
      <div class="portail1">
        <img id="portail1" src="../images/portail1.gif">
          <h1 id="Text2">LEROY D'LA COLLECTION<h1>
        <img id="gunorange" src="../images/gunorange.gif">
        </div>
      </div>


<!-- Deuxiéme titre -->

<!-- Second title -->

    <div class="Infos2" id="Infos2" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
      <div class="portail2">
          <img id="portail2" src="../images/portail2.gif">
          <h1 id="Text3">BOUTIQUE VINTAGE<h1>
          <img id="gunbleu" src="../images/gunbleu.gif">
        </div>
    </div>

<!-- Troisiéme titre -->

<!-- Third title -->    

    <div class="Infos3" id="Infos3" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
      <div class="portail3">
      <img id="gunnoir" src="../images/gunblack.gif">
          <h1 id="Text4">ACHETER/VENDER<h1>
          <img id="portail3" src="../images/portail3.gif">
      </div>
    </div>

</div>    

<!-- Script aos et typewriter necessaire pour le texte ligne 69 et les trois titres ligne 91 , 105, 117 -->

<!-- Script aos and typewriter needed for text line 69 and three titles line 91 , 105, 117 -->

<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Script js avec toutes les animations -->

<!-- Js script with all animations -->

<script src="../script/script.js"></script>


<!-- Permet de lancer la librairie AOS pour les animations data-aos, data-aos-easing -->

<!-- For launch AOS animations data-aos, data-aos-easing -->

<script>  
  AOS.init();
</script>
</body>
</html>

