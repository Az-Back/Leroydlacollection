<?php
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/navbar.css">
<link rel="stylesheet" href="../styles/mediaqueries.css">
<script src="https://kit.fontawesome.com/b64623b467.js" crossorigin="anonymous"></script>
<link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<nav class="NavBar">

  <ul class="List">
  <video id="background-videonav" autoplay loop muted>

<source src="../images/background5.mp4" type="video/mp4">

</video>
    <li class="TextNav">
    <a id="accueil" class="RefNav <?= ($nomDeLaPage == 'Accueil.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Accueil.php' },1000);">
      <p class="Paragraphe">Accueil</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
    </a>
  </li>

      <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'Apropos.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Apropos.php' },1000);">
      <p class="Paragraphe">A propos</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>

    <li class="TextNav">
      <a id="articles" class="RefNav <?= ($nomDeLaPage == 'Articles.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Articles.php' },1000);">
      <p class="Paragraphe">Articles</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>
    
    <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'Contact.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Contact.php' },1000);">
      <p class="Paragraphe">Contact</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>

        <?php 
        if(!isset($_SESSION['auth'])){
          ?>
    <li class="TextNav">
      <a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/Inscription.php' },1000);">
      <p class="Paragraphe">Inscription</p>
      </a>
    </li> 
    <li class="TextNav">
      <a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/Connexion.php' },1000);">
      <p class="Paragraphe">Connexion</p>
    </a>
    </li>
    <?php
        } 
          ?>
          <?php 
        if(isset($_SESSION['auth'])){
          ?>
    <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'VenteArticle.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/VenteArticle.php' },1000);">
    <p class="Paragraphe">Vendre un Article</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
  </a>
    </li>
    <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'Favoris.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Favoris.php' },1000);">
    <p class="Paragraphe">Favoris</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
  </a>
    </li>
    <li class="TextNav"><a class="RefNav <?= ($nomDeLaPage == 'Utilisateur.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Utilisateur.php' },1000);">
    <p class="Paragraphe">
    <i class="fa-solid fa-user"></i>
      <?= $_SESSION['pseudo']; ?></p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
    </a>
  </li>
    <?php
        } 
          ?>

<?php 
        if($nomDeLaPage == 'Articles.php' OR $nomDeLaPage == 'MesArticles.php' OR $nomDeLaPage == 'MesCommandes.php'){
          ?>
  <form method="GET" class="research">

  <div class="search">
        <div class="icon"></div>
        <div class="input">
            <input type="text" placeholder="Search" id="mysearch" name="search">
        </div>
        <span class="clear"></span>
    </div>
    <?php 
        }
          ?>
</form>     
  </ul>
  <div class="toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>   
  <script src="../script/navbar.js"></script>
</nav>