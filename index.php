<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css necessaire -->

<!-- css needed -->
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/mediaqueriesindex.css">
   
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

<div class="Head">  
  <div class="Title1">
    <h1>DES <br> OBJETS <br> A VENDRE ?<br> A ACHETER ? <br> CLIQUEZ</h1>
  </div>  
    <div class="Title" id="Title" onClick="setTimeout('RedirectionJavascript()', 3000)">
    <h1 class="glitch"><span class="span1">→</span>&nbsp;ICI&nbsp;<span class="span2">←</span></h1>
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

