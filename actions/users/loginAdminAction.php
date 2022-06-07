<?php
// Démarre une nouvelle session ou reprend une session existante

// Starts a new session or resumes an existing session

session_start();

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');


// Validation du formulaire

// Form validation

if(isset($_POST['validate'])){

    // Verifier si l'utilisateur a bien completer tous les champs !

    // Check if the user has completed all fields!
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){

        $default_pseudo = "admin";
        $default_password = "admin";

        $pseudo_enter = htmlspecialchars($_POST['pseudo']);
        $password_enter = htmlspecialchars($_POST['password']);

        if($pseudo_enter == $default_pseudo && $password_enter == $default_password){
            $_SESSION['admin'] = true;
            $_SESSION['pseudo'] = $pseudo_enter;
            header('Location: Admin.php');
        } else {
            $errorMsg = "Votre mot de passe ou votre nom d'utilisateur est incorrect";
        }

    } else {
        $errorMsg = "Veuillez completer tous les champs !";
    }
}