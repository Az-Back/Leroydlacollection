<?php
// Si aucune session n'est definit, retour a la page Connexion.php

// If no session is set, back to the Connexion.php page

if(!isset($_SESSION['auth']) && !isset($_SESSION['admin'])){
    header('Location: Connexion.php');
}