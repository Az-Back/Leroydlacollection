<?php

// Crée une instance PDO qui représente une connexion à la base de donnée avec pour nom leroy et pour pseudo et mot de passe root

// Creates a PDO instance that represents a database connection with leroy name and pseudo and root password

try {
    $bdd = new PDO('mysql:host=localhost;dbname=leroy;charset=utf8;', 'root', 'root');
} catch(Exception $e){
    die('Une erreur a été trouvée : '. $e->getMessage());
}
