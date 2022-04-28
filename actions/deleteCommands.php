<?php

require('database.php');
// Sert a verifier si la variable est declarer
if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // l'id de la question en parametre
    $idOfTheCommand = $_GET['id'];

    // Verifier si la question existe
    $checkIfCommandExists = $bdd->prepare('SELECT id FROM commandes WHERE id = ?');
    $checkIfCommandExists->execute(array($idOfTheCommand));

        // Recuperer les infos de la question
        $CommandInfos = $checkIfCommandExists->fetch();

            // Supprimer la question en fonction de son id rentré en paramétre
            $deleteThisCommand = $bdd->prepare('DELETE FROM commandes WHERE id = ?');
            $deleteThisCommand->execute(array($idOfTheCommand));

            // Rediriger l'utilisateur vers ses questions
            header('Location: ../pages/MesCommandes.php');
}            