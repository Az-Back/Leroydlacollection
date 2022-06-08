<?php

// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database
require('../actions/database/database.php');

// Validation du formulaire

// Validation of the form
if(isset($_POST['validate'])){

    // Verifier si l'utilisateur a bien completer tous les champs !

    // Check if the user has completed all fields!
    
    if(!empty($_POST['pseudo']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password']) && !empty($_POST['adress']) && !empty($_POST['postal']) && !empty($_FILES['image'])){

        // Les données de l'utilisateur

        // The data of the user
        $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
        $user_lastname_update = htmlspecialchars($_POST['lastname']);
        $user_firstname_update = htmlspecialchars($_POST['firstname']);
        $user_adress_update = htmlspecialchars($_POST['adress']);
        $user_city_update = htmlspecialchars($_POST['city']);
        $user_postal_update = htmlspecialchars($_POST['postal']);
        $user_bin_image_update = file_get_contents($_FILES['image']['tmp_name']);
        $user_password_update = password_hash($_POST['password'], PASSWORD_DEFAULT);

        
            $newInfoUsers= $bdd->prepare('UPDATE users SET pseudo = ?, lastname = ?, firstname = ?, password = ?, adress = ?, city = ?, postal = ?, bin = ? WHERE id = ?');
            $newInfoUsers->execute(array(
                $_SESSION['pseudo'], 
                $user_lastname_update, 
                $user_firstname_update, 
                $user_password_update, 
                $user_adress_update, 
                $user_city_update, 
                $user_postal_update, 
                $user_bin_image_update,
                $_SESSION['id']
            ));

            header('Location: ../pages/Utilisateur.php');

        } else {
            $errorMsg = "L'utilisateur existe deja";
        }

} 