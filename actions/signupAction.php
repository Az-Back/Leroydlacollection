<?php
session_start();
require('database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    // Verifier si l'user a bien completer tous les champs !
    if(!empty($_POST['pseudo']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password']) && !empty($_POST['adress']) && !empty($_POST['postal'])){

        // Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_adress = htmlspecialchars($_POST['adress']);
        $user_city = htmlspecialchars($_POST['city']);
        $user_postal = htmlspecialchars($_POST['postal']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Verifier si l'user existe deja
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            // Inserer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, password, adress, city, postal)VALUES(?, ?, ?, ?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password, $user_adress, $user_city, $user_postal));

            // Récuperer les infos de l'utilisateur (surtout l'id)
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, lastname, firstname, adress, city, postal FROM users WHERE lastname = ? && firstname = ? && pseudo = ? && adress = ? && city = ? && postal = ?');
            $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo, $user_adress, $user_city, $user_postal  ));

            $userInfos = $getInfosOfThisUserReq->fetch();
            
            // Authentifier l'utilsateur sur le site et récuperer ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['lastname'] = $userInfos['lastname'];
            $_SESSION['firstname'] = $userInfos['firstname'];
            $_SESSION['adress'] = $userInfos['adress'];
            $_SESSION['city'] = $userInfos['city'];
            $_SESSION['postal'] = $userInfos['postal'];
            $_SESSION['pseudo'] = $userInfos['pseudo'];

            // Redirection sur index.php
            header('Location: ../pages/Accueil.php');

        } else {
            $errorMsg = "L'utilisateur existe deja";
        }

    } else {
        $errorMsg = "Veuillez completer tous les champs...";
    }
}