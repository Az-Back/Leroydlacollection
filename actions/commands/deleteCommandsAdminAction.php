<?php
// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');

// Sert a verifier si la variable est declarer et si l'id recuperer n'est pas vide

// Used to check if the variable is declared and if the id recover is not empty

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // l'id de la commande en parametre

    // The command id in parameter

    $idOfTheCommand = $_GET['id'];

    // Récupération de l'id de la commande en fonction de l'id récupérer plus haut

    // Recovery of the id of the command according to the id recover above

    $checkIfCommandExists = $bdd->prepare('SELECT id FROM commandes WHERE id = ?');
    $checkIfCommandExists->execute(array($idOfTheCommand));

        if(isset($_SESSION['admin'])){
            // Supprimer la commande en fonction de son id rentré en paramétre

            // Delete the command according to its id entered in the settings

            $deleteThisCommand = $bdd->prepare('DELETE FROM commandes WHERE id = ?');
            $deleteThisCommand->execute(array($idOfTheCommand));

            header('Location: ../../pages/AllCommands.php');
            // Rediriger l'utilisateur vers les commandes
        } else
            
            
}            