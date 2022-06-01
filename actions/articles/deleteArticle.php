<?php
session_start();
require('../security/securityAction.php');

require('../database/database.php');
// Sert a verifier si la variable est declarer
if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // l'id de la question en parametre
    $idOfTheQuestion = $_GET['id'];

    // Verifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT pseudo_auteur FROM articles WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        // Recuperer les infos de la question
        $questionsInfos = $checkIfQuestionExists->fetch();
        if($questionsInfos['pseudo_auteur'] == $_SESSION['pseudo']){

            // Supprimer la question en fonction de son id rentré en paramétre
            $deleteThisQuestion = $bdd->prepare('DELETE FROM articles WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            // Rediriger l'utilisateur vers ses questions
            header('Location: ../../pages/MesArticles.php');

        } else {
            $errorMsg = "Vous ne pouvez pas supprimer l'article";
        }

    } else {
        $errorMsg = "Vous ne pouvez pas supprimer l'article";
    }

} else {
    $errorMsg = "Vous ne pouvez pas supprimer l'article";
}