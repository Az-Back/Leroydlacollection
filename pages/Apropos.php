<?php
session_start();
$nomDeLaPage = basename(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/apropos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>A propos</title>
</head>
<body>
<img class="Ufo" src="../images/soucoupe.gif">
<?php include '../includes/navbar.php'; ?>
<video id="background-video" autoplay loop muted>

<source src="../images/background3.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">
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
              <div class="case" id="presentation" data-aos="fade-in" data-aos-delay="100" data-aos-easing="ease-in-out">
              <div class="video">
                <h1 class="titlevideo">Video de présentation</h1>
              <div>
                <video id="presentation-video" controls width="250" muted>

                <source src="../images/présentation.mp4" type="video/mp4">

                </video>
</div>

<div class="BlockTitleSlider"><h1 class="titleslider">Galerie d'articles</h1></div>
          
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
<script src="../script/script.js"></script>
<script src="../script/slider.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script> 
</body>
</html>