<?php
require("../actions/allinfouser.php")
?>
<link rel="stylesheet" href="../styles/navbar.css">
<link rel="stylesheet" href="../styles/mediaqueries.css">
<script src="https://kit.fontawesome.com/b64623b467.js" crossorigin="anonymous"></script>
<link href="http://fonts.cdnfonts.com/css/polentical-neon" rel="stylesheet">
<?php 

     $User = $getInfoOfUser->fetch()
         ?>
<nav class="NavBar">

<div class="toggle">
      <span></span>
      <span></span>
      <span></span>
</div> 
  <ul class="List">
    <li class="TextNav">
    <a class="RefNav active" href="javascript:setTimeout(()=>{window.location = '../pages/Accueil.php' },1000);">
      <p class="Paragraphe">Accueil</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
    </a>
  </li>

      <li class="TextNav">
      <a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/Propos.php' },1000);">
      <p class="Paragraphe">A propos</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>

    <li class="TextNav">
      <a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/Articles.php' },1000);">
      <p class="Paragraphe">Articles</p>
      <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
      </a>
    </li>
    
    <li class="TextNav">
      <a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/Contact.php' },1000);">
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
    <li class="TextNav"><a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/MesArticles.php' },1000);">
    <p class="Paragraphe">Mes Articles</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
  </a>
  </li>
    <li class="TextNav"><a class="RefNav" href="javascript:setTimeout(()=>{window.location = '../pages/VenteArticle.php' },1000);">
    <p class="Paragraphe">Vendre un Article</p>
        <span></span>  
        <span></span>  
        <span></span>  
        <span></span>
  </a>
    </li>
    <li class="TextNav"><a class="RefNav" href="../actions/logoutAction.php">Deconnexion</a></li>
    <li class="TextNav"><a class="RefNav"><i class="fa-solid fa-user"></i><?= $User['pseudo']; ?></a></li>
    <?php
        } 
          ?>
  </ul>
  </div>
  <script src="../script/navbar.js"></script>
</nav>