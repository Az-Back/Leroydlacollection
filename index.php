<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/LogoRouge.jpg">
<!-- css necessaire -->

<!-- css needed -->
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/mediaqueriesindex.css">
    <link rel="icon" type="image/jpg" href="../images/logo.jpg" />
    <title>Index</title>
</head>
<body>

<!-- Video en arrière-plan
 Video on background -->

<video id="background-video" loop muted>

<source src="images/Loading1.mp4" type="video/mp4">

</video>

<!-- Conteneur global -->

<!-- Global container -->

<div class="Head" onClick="setTimeout('RedirectionJavascript()', 3000)"> <!--Sert a la redirection qui s'effectue aprés 3s au clique du bouton -->  
  <img class="Delorean" src="images/Delorean.gif">
  <br>
  <div class="ContainerIn">
    <div class="progress progress-moved">
      <div class="allprogress"><img id="portail1" src="images/portail1"><div class="progress-bar"></div><img id="portail1" src="images/portail2"></div>
    </div>
    <div class="Link"><button class="LinkButton">Cliquez <br>ICI</button></div>
  </div>
</div> 

<script src="script/index.js"></script>
<script type="text/javascript">

// <!-- Fonction et adresse de la redirection -->
      function RedirectionJavascript(){
        document.location.href="pages/Accueil.php";
      }
</script>
</body>
</html>

