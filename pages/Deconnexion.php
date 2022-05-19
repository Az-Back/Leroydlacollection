<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css necessaire -->

<!-- css needed -->
    <link href="../styles/deco.css" rel="stylesheet">
    <link href="../styles/mediaqueries.css" rel="stylesheet">
   
    <title>Deconnexion</title>
</head>

<!-- Evenement au chargement de la page suivi de la redirection aprés 2 secondes -->

<!--Event at page loading followed by redirection after 2 seconds -->
<body onLoad="setTimeout('RedirectionJavascript()', 2000)">

<!-- Video en background
 Video on background -->
<video id="background-video" autoplay loop muted>

<source src="../images/background2.mp4" type="video/mp4">

</video>

<h3 class="glitch">GAME OVER</h3>
<h3 class="glitch1">PLEASE WAIT</h3>


<!-- Script necessaire permettant la redirection -->

<!-- Necessary script for redirection -->
<script> 
function RedirectionJavascript(){
        document.location.href="Accueil.php";
      }
</script>
</body>
</html>