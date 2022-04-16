<?php

require('database.php');

// Validation du formulaire
if(isset($_POST['validate'])){


    // Verifier si les champs sont remplis
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])){

        // Les données a faire passer dans la requête
        $new_question_title = htmlspecialchars($_POST['title']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_content = nl2br(htmlspecialchars($_POST['content']));
        $new_question_image = file_get_contents($_FILES['picture']['tmp_name']);


        // Modifier les informations de la question qui posséde l'id rentré en paramètre dans l'url
        $editQuestionOnWebsite = $bdd->prepare('UPDATE menus SET titre = ?, description = ?, contenu = ?, bin = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_title, $new_question_description, $new_question_content, $new_question_image, $idOfQuestion));

        header('Location: reservation2.php');

    } else {
        $errorMsg = "Veuillez modifier tous les champs";
    }
}