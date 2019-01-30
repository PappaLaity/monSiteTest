<?php
session_start();
include ("header.php");
include ("navbar.php");
?>



<div class="blog" id="blog">
    <br/><br/>
    <div class="container">
        <div class="row ">
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-4 ajouter bg-success blog">
                <br/>
                <form method="POST" action="postBlog.php">
                    <fieldset>

                        <legend class="text-center"><u>Poster un Article</u></legend>    
                        <label for="prenom">Prenom *</label>
                        <input type="text" class="form-control " name="prenom" id="prenom">
                        <label for="nom">Nom *</label>
                        <input type="text" class="form-control " name="nom" id="nom">
                        <label for="email"> Email *</label>
                        <input type="text" class="form-control " name="email" id="">                        
                        <label for="domaine">Domaine *</label>
                        <input type="text" class="form-control " name="domaine" id="domaine">
                        <label for="theme">Theme *</label>
                        <input type="text" class="form-control " name="theme" id="theme">
                        <label for="article">Article *</label>
                        <textarea class="form-control " rows="5 " name="article" id="article"></textarea>
                        <br/>
                        <button class="btn btn-dark" type="submit">Envoyer</button>
                        

                    </fieldset>
                    
                </form>
                <p class="nb">
                    NB: Votre document sera soumis aux administrateurs qui vont le traiter avant de pouvoir 
                    le publier.
                </p>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-8 col-xl-8  articles" style="border:0px solid #333 ">
                <div class="card ">
                    <div class="card-header text-center">
                       <h2> Blog Scientifique</h2>
                    </div>
                    <?php
                        include ("connect.php");
                        $reponse = $bdd->query('SELECT * FROM BlogGhost');
                        while($donnees=$reponse->fetch()){
                            if($donnees['statut']=="public"){

                          
                    ?>
                    <div class="card-body">
                        <h4 class="card-title"><?= htmlspecialchars($donnees['theme'])?></h4>
                        <p class="card-text"><?= htmlspecialchars($donnees['domaine'])?></p>
                        <p class="card-text"><?= htmlspecialchars($donnees['article'])?></p>
                    </div>

                    <?php
                         }
                        }

                        $reponse->closeCursor();
                    ?>
                </div>
                
            </div>
        </div>
    </div>
<div>

<br/><br/>
<?php 
include ("footer.php");
?>