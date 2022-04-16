<?php

require('database.php');

// Sert a savoir si l'utilisateur a bien cliquer sur le bouton
if(isset($_POST['validate'])){

    // Verifier si les champs ne sont pas vides
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content']) && !empty($_FILES['picture'])){
        
        // les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_image_name = $_FILES['picture']['name'];
        $question_image_size = $_FILES['picture']['size'];
        $question_image_type = $_FILES['picture']['type'];
        $question_image_bin = file_get_contents($_FILES['picture']['tmp_name']);
        $question_date = date('d/m/Y');
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];
        
        // Inserer la question sur la question
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO articles(titre, description, contenu, nom_image, image_taille, type_image, bin, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title, 
                $question_description, 
                $question_content,
                $question_image_name,
                $question_image_size,
                $question_image_type,
                $question_image_bin, 
                $question_id_author, 
                $question_pseudo_author, 
                $question_date
            )
        );

        $successMsg = 'Votre article a bien eté publiée sur le site';
    } else {
        $errorMsg = 'Veuilez remplir tous les champs !';
    }

}