<?php
if(!isset($_SESSION['auth'])){
    header('Location: Connexion.php');
}