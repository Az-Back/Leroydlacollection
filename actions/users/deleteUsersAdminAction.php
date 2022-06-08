<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();


require('../security/securityAction2.php');

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../database/database.php');

// Sert a verifier si la variable existe

if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // Récupération de l'id de l'article

    // // Retrieving the item id
    $idOfTheUser = $_GET['id'];

    // Verifier si l'article existe et récuperer les informations

    // Check if the item exists and retrieve the information

    $getIdUser = $bdd->prepare('SELECT id FROM users WHERE id = ?');
    $getIdUser->execute(array($idOfTheUser));


        $UserId = $getIdUser->fetch();
        

            // Supprimer la question en fonction de son id rentré en paramétre
            $UserId = $bdd->prepare('DELETE FROM users WHERE id = ?');
            $UserId->execute(array($idOfTheUser));
            usleep(1800000);
            // Rediriger l'utilisateur vers ses questions
            header('Location: ../../pages/Admin.php');

        } else {
            $errorMsg = "Vous ne pouvez pas supprimer l'utilisateur";
            header('Location: ../../pages/AllUsers.php');
        }
