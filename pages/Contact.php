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
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <title>Contact</title>
</head>
<body>

<?php include '../includes/navbar.php'; ?>
<img class="Ufo" src="../images/soucoupe.gif">

<video id="background-video" autoplay loop muted>

<source src="../images/background2.mp4" type="video/mp4">

</video>
<div class="mousemove"></div>
<img id="sprite2"  src="../images/goku.gif">

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
<script src="../script/script.js"></script>
<script src="../script/contact.js"></script>
</body>
</html>