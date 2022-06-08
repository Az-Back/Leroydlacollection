<?php



// Récupération du fichier database.php pour avoir accés a la base de données

// Recovery of the database.php file to have access to the database

require('../actions/database/database.php');

// Sert a verifier si la variable est declarer et si l'id recuperer n'est pas vide

// Used to check if the variable is declared and if the id recover is not empty

if(isset($_SESSION['id'])){

    $idOfTheUser = $_SESSION['id'];

    // Récupération et vérification des données de l'article en fonction de l'id

    // Retrieving and verifying article data based on id

    $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfTheUser));

    if($checkIfUserExists->rowCount() > 0){


        // Recuperer les données de l'utilisateur

        // Retrieve the data of the user
        
        $userInfos = $checkIfUserExists->fetch();


            $_SESSION['pseudo'] = $userInfos['pseudo'];
            $new_lastname_user = $userInfos['lastname'];
            $new_firstname_user = $userInfos['firstname'];
            $new_password_user= $userInfos['password'];
            $new_city_user= $userInfos['city'];
            $new_adress_user= $userInfos['adress'];
            $new_postal_user= $userInfos['postal'];
            $new_bin_user= $userInfos['bin'];

        

    } else {
        $errorMsg = "Aucun utilisateur n'a été trouvé";
    }
} else {
    header('Location: ../pages/Connexion.php');
}    