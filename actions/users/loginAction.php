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

        // Les données de l'utilisateur

        // The data of the user

        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        // Verifier si l'utilisateur existe (si le pseudo est correct)

        // Check if the user exists (if the nickname is correct)

        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if($checkIfUserExists->rowCount() > 0){

            // Récuperer les données de l'utilisateur et comparer le mot de passe

            // Retrieve user data and compare password

            $usersInfos = $checkIfUserExists->fetch();
            if(password_verify($user_password, $usersInfos['password'])){
                
                // Authentifier l'utilisateur sur le site et récuperer ses données

                // Authenticate the user on the site and retrieve his data
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['lastname'];
                $_SESSION['firstname'] = $usersInfos['firstname'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['adress'] = $usersInfos['adress'];
                $_SESSION['city'] = $usersInfos['city'];
                $_SESSION['postal'] = $usersInfos['postal'];
                sleep(2);
                header('Location: ../pages/Accueil.php');

            } else {
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        } else {
            $errorMsg = "Le pseudo de l'utilisateur est deja utilisé ou est incorrect";
        }

    } else {
        $errorMsg = "Veuillez completer tous les champs...";
    }
}