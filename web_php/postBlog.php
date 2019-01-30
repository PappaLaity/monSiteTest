<?php

include ("connect.php");


if (!empty($_POST)) {
    $errors = [];
    if (!isset($_POST['prenom']) || empty($_POST['prenom'])) {
        $errors['prenom'] = 'Veuillez entrer un prenom';
        echo 'Veuillez entrer un prenom'.'<br/>' ;
    }
    if (!isset($_POST['nom']) || empty($_POST['nom'])) {
        $errors['nom'] = 'Veuillez entrer un nom';
        echo 'Veuillez entrer un nom'.'<br/>' ;
    }
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $errors['email'] = 'Veuillez entrer votre mail';
        echo 'Veuillez entrer votre mail'.'<br/>' ;
    }
    if (!isset($_POST['domaine']) || empty($_POST['domaine'])) {
        $errors['domaine'] = 'Veuillez entrer le domaine';
        echo 'Veuillez entrer le domaine'.'<br/>' ;
    }
    if (!isset($_POST['theme']) || empty($_POST['theme'])) {
        $errors['theme'] = 'Veuillez entrer le theme';
        echo 'Veuillez entrer le theme'.'<br/>' ;
    }
    if (!isset($_POST['article']) || empty($_POST['article'])) {
        $errors['article'] = 'Veuillez entrer l\'article';
        echo 'Veuillez entrer l\'article'.'<br/>' ;
    }

    if (empty($error)) {

           // $reponse = $bdd->prepare('INSERT into BlogGhost (prenom,nom,email,domaine,theme,article,date_publication,statut) VALUES (:prenom,:nom,:email,:domaine,:theme,:article,NOW(),\'attente\')');
           $reponse = $bdd->prepare('INSERT into BlogGhost  VALUES (\'\',:prenom,:nom,:email,:domaine,:theme,:article,NOW(),\'attente\')'); 
           $reponse->execute(array(
                'prenom'=>htmlspecialchars($_POST['prenom']),
                'nom'=>htmlspecialchars($_POST['nom']),
                'email'=>htmlspecialchars($_POST['email']),
                'domaine'=>htmlspecialchars($_POST['domaine']),
                'theme'=>htmlspecialchars($_POST['theme']),
                'article'=>htmlspecialchars($_POST['article'])  
            ));     
            echo '<br/>'.'Message Envoye'.'<br/>'; 
            //unset($_POST);   
            header('Location: blog.php'); 
            exit();


        $reponse->closeCursor(); 

    } else {
        $_SESSION['flash']['error'][] = "Erreur de validation du formulaire!";
    }
}
//unset($_POST); 
?>
