<?php
session_start();
$nomDeLaPage = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/accueil.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Leroy d'la collection</title>
</head>
<body>
<img class="Ufo" src="../images/soucoupe.gif">
<?php include '../includes/navbar.php'; ?>

<video id="background-video" autoplay loop muted>

<source src="../images/background1.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">
    <div class="Container">
      <div class="Text"></div>
        <div class="Scroll"><a href="#Infos" class="Fleche">
          <div class="arrow">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </a></div>
    </div>

<div class="case">
    <div class="Infos1" id="Infos" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
      <div class="portail1">
        <img id="portail1" src="../images/portail1.gif">
          <h1 id="Text2">LEROY D'LA COLLECTION<h1>
        <img id="gunorange" src="../images/gunorange.gif">
        </div>
      </div>
          <br>
    <div class="Infos2" id="Infos2" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
      <div class="portail2">
          <img id="portail2" src="../images/portail2.gif">
          <h1 id="Text3">BOUTIQUE VINTAGE<h1>
          <img id="gunbleu" src="../images/gunbleu.gif">
        </div>
    </div>

    <div class="Infos3" id="Infos3" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
      <div class="portail3">
      <img id="gunnoir" src="../images/gunblack.gif">
          <h1 id="Text4">ACHETER/VENDER<h1>
          <img id="portail3" src="../images/portail3.gif">

</div>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../script/script.js"></script>
<script>
  AOS.init();
</script> 
</body>
</html>

