<?php
include ("connect.php");


if (!empty($_POST)) {
    $errors = [];
    if (!isset($_POST['prenom']) || empty($_POST['prenom'])) {
        $errors['prenom'] = 'Veuillez entrer votre prenom';
        echo 'Veuillez entrer un prenom'.'<br/>' ;
    }
    if (!isset($_POST['nom']) || empty($_POST['nom'])) {
        $errors['nom'] = 'Veuillez entrer votre nom';
        echo 'Veuillez entrer votre nom'.'<br/>' ;
    }
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $errors['email'] = 'Veuillez entrer votre mail';
        echo 'Veuillez entrer votre mail'.'<br/>' ;
    }
    if (!isset($_POST['login']) || empty($_POST['login'])) {
        $errors['login'] = 'Veuillez entrer un login';
        echo 'Veuillez entrer un login'.'<br/>' ;
    }
    if (!isset($_POST['pwd']) || empty($_POST['pwd'])) {
        $errors['pwd'] = 'Veuillez entrer un mot de passe';
        echo 'Veuillez entrer un mot de passe'.'<br/>' ;
    }
    if (!isset($_POST['cfpwd']) || empty($_POST['cfpwd'])) {
        $errors['password'] = 'Veuillez entrer le meme mot de passe';
       // echo 'Veuillez entrer un mot de passe'.'<br/>';
    }

    if (empty($error)) {
        if( $_POST['pwd'] == $_POST['cfpwd']){
            $reponse = $bdd->prepare('INSERT into userGhost  VALUES (\'\',:prenom,:nom,:email,:logina,:mdp)');
            $reponse->execute(array(
                'prenom'=>htmlspecialchars($_POST['prenom']),
                'nom'=>htmlspecialchars($_POST['nom']),
                'email'=>htmlspecialchars($_POST['email']),
                'logina'=>htmlspecialchars($_POST['login']),
                'mdp'=>htmlspecialchars($_POST['pwd'])  
            ));     
            //echo '<br/>'.'Insertion Effectuee'.'<br/>';  
            header('Location: index.php'); 
            exit();

        }else{

            echo '<br/>'.'Veuillez entrez le meme mot de passe'.'<br/>';
        }


        $reponse->closeCursor(); 

    } else {
        $_SESSION['flash']['error'][] = "Erreur de validation du formulaire!";
    }
}
//unset($_POST); 
?>
