<?php
// Si aucune session n'est definit, retour a la page ConnexionAdmin.php

// If no session is set, back to the ConnexionAdmin.php page

if(!isset($_SESSION['admin'])){
    header('Location: ConnexionAdmin.php');
}