<!DOCTYPE html>
<html lang="fr">
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

<!-- Video en background qui s'affiche en reponsive
 Video on background who show in reponsive -->

<video id="background-videonav" autoplay loop muted>

<source src="../images/background5.mp4" type="video/mp4">

</video>

<!--$nomDeLaPage permet d'avoir la classe active sur la page concerné

    $nomDeLaPage allows to have the active class on the page concerned -->

<!-- LI 1 -->

    <li class="TextNav">
    <a id="accueil" class="RefNav <?= ($nomDeLaPage == 'Accueil.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Accueil.php' },1000);">
      <p class="Paragraphe">Accueil</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
    </a>
  </li>

<!-- LI 2 -->

      <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'Apropos.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Apropos.php' },1000);">
      <p class="Paragraphe">A propos</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>

<!-- LI 3 -->

    <li class="TextNav">
      <a id="articles" class="RefNav <?= ($nomDeLaPage == 'Articles.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Articles.php' },1000);">
      <p class="Paragraphe">Articles</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>
    
<!-- LI 4 -->
    
    <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'Contact.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Contact.php' },1000);">
      <p class="Paragraphe">Contact</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>

<!-- LI 5 -->  

<!-- !isset permet de savoir si la $_SESSION auth n'est pas definie

    isset lets you know if the $_SESSION auth is not set -->

<!-- Pas de session definie donc on affiche Inscription et Connexion -->
<!-- No definite session so we display Registration and Login -->    

        <?php 
        if(!isset($_SESSION['auth'])){
          ?>
    <li class="TextNav">
      <a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/Inscription.php' },1000);">
      <p class="Paragraphe">Inscription</p>
      </a>
    </li>

<!-- LI 6 -->      
    
    <li class="TextNav">
      <a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/Connexion.php' },1000);">
      <p class="Paragraphe">Connexion</p>
    </a>
    </li>
    <?php
        } 
          ?>

<!-- isset permet de savoir si la $_SESSION auth est definie

    isset lets you know if the $_SESSION auth is set -->

<!-- Session definie donc on affiche Vendre un article, Favoris ainsi que le nom de l'utilisateur --> 

<!-- Session defines so we display Sell an article, Favorites as well as the name of the user -->

          <?php 
        if(isset($_SESSION['auth'])){
          ?>
 
<!-- LI 7 -->  
 
    <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'VenteArticle.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/VenteArticle.php' },1000);">
    <p class="Paragraphe">Vendre un Article</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
  </a>
    </li>

<!-- LI 8 -->  

    <li class="TextNav">
      <a class="RefNav <?= ($nomDeLaPage == 'Favoris.php') ? 'active':''; ?>" href="javascript:setTimeout(()=>{window.location = '../pages/Favoris.php' },1000);">
    <p class="Paragraphe">Favoris</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
  </a>
    </li>

<!-- LI 9 -->

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

<!-- Permet de montrer le champ de recherche en fonctions de la page, si la page correspond a Articles, MesArticles, ou Mes commandes -->

<!-- Shows the search field according to the page, if the page corresponds to Articles, MesArticles, or My Orders -->


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

<!-- Bouton de la navbar qui s'affiche une fois en responsive pour acceder au LI -->  

  <div class="toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
      
  <script src="../script/navbar.js"></script>
</nav>
</html>