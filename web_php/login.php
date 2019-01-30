<?php
session_start();

include ("header.php");
include ("navbar.php");

?>

<br/><br/>
<div class="row ">

    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " style="border:0px solid #333 ">
    </div>

    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 " style="border:1px solid #333 ">
        <br/>
        <div class="blog" id="blog">
            <div class="container">
                <form method="POST" action="">
                    <fieldset>

                        <legend class="text-center">Connexion</legend>    
                        <label for="login">Login</label>
                        <input type="text" class="form-control " name="login" id="login">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control " name="pwd" id="pwd">
                        <br/>
                        <button class="btn btn-dark" type="submit">Se connecter</button>
                        

                    </fieldset>
                    
                </form>
                <br/>
            </div>
        </div>
        <?php

            if (!empty($_POST)) {
                $errors = [];
                if (!isset($_POST['login']) || empty($_POST['login'])) {
                    $errors['login'] = 'Veuillez entrer un login';
                    echo 'Veuillez entrer un login'.'<br/>' ;
                }
                if (!isset($_POST['password']) || empty($_POST['password'])) {
                    $errors['password'] = 'Veuillez entrer un mot de passe';
                   // echo 'Veuillez entrer un mot de passe'.'<br/>';
                }

                if (empty($error)) {

                    include ("connect.php");

                    $reponse = $bdd->query('SELECT * FROM userGhost');

                    while($donnee=$reponse->fetch()){
                        if(($donnee['login']==$_POST['login']) && ($donnee['password']==$_POST['pwd'])){
                            //$_SESSION['user'] = json_decode(json_encode($user));
                            $_SESSION['user']=$donnee['prenom'];
                            //$_SESSION['flash']['success'][] = sprintf("Bienvenue %s %s!", $user->first_name, $user->last_name);
                            header('Location: index.php');
                            exit();
                        }
                    }
                    //$_SESSION['flash']['error'][] = "Login ou mot de passe incorrect!";
                    echo "Login ou mot de passe incorrect!";

                    $reponse->closeCursor(); 

                } else {
                    $_SESSION['flash']['error'][] = "Erreur de validation du formulaire!";
                }
            }
        ?>

        
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
        
    </div>

</div>


