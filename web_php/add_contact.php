<?php

include ("connect.php");


if (!empty($_POST)) {
    $errors = [];
    if (!isset($_POST['name']) || empty($_POST['name'])) {
        $errors['name'] = 'Veuillez entrer un pseudo';
        echo 'Veuillez entrer un pseudo'.'<br/>' ;
    }
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $errors['email'] = 'Veuillez entrer votre mail';
        echo 'Veuillez entrer votre mail'.'<br/>' ;
    }
    if (!isset($_POST['subject']) || empty($_POST['subject'])) {
        $errors['subject'] = 'Veuillez entrer le sujet';
        echo 'Veuillez entrer le sujet'.'<br/>' ;
    }
    if (!isset($_POST['comment']) || empty($_POST['comment'])) {
        $errors['comment'] = 'Veuillez entrer votre requete';
        echo 'Veuillez entrer votre requete'.'<br/>' ;
    }

    if (empty($error)) {

            $reponse = $bdd->prepare('INSERT into contactGhost  VALUES (\'\',:nom,:email,:sujet,:comment)');
            $reponse->execute(array(
                'nom'=>htmlspecialchars($_POST['name']),
                'email'=>htmlspecialchars($_POST['email']),
                'sujet'=>htmlspecialchars($_POST['subject']),
                'comment'=>htmlspecialchars($_POST['comment'])  
            ));     
            echo '<br/>'.'Message Envoye'.'<br/>'; 
            //unset($_POST);   
            header('Location: index.php'); 
            exit();


        $reponse->closeCursor(); 

    } else {
        $_SESSION['flash']['error'][] = "Erreur de validation du formulaire!";
    }
}
//unset($_POST); 
?>
