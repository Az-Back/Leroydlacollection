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
    <link rel="stylesheet" href="../styles/index.css">
    <link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
    <title>Leroy d'la collection</title>
</head>
<body>
<img class="Ufo" src="../images/soucoupe.gif">
<?php include '../includes/navbar.php'; ?>

<video id="background-video" autoplay loop muted>

<source src="../images/background2.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">
<div class="Container">
<div class="Text"></div>
<div class="Scroll"><img class="Goldo" src="../images/goldoend.png"></div>
</div>

<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="../script/script.js"></script>
</body>
</html>