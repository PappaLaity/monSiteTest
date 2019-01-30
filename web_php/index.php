<?php
session_start();
if (!isset($_SESSION['user']) || empty($_SESSION['user'])){
    /* Si la session user n'existe pas ou s'il est vide */
include ("header.php");
?>
<section class="header" id="header ">
<?php
include ("navbar.php");
include ("home.php");
?>
  
</section>

<?php
include ("contact.php");
include  ("footer.php");
?>

<?php
}else{
    include ("header.php");
    include ("navbar.php");

?>


<section class="bg-light">
<!--
<div class="contact">
<h2 class="text-center">
Join
</h2>
    <div class="container">
        <?php
         include ("connect.php");

        $reponse = $bdd->query('SELECT * FROM contactGhost');
        ?>
        <table class="table" id="table">
            <thead>
            <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Mail</th>
            <th>Sujet</th>
            <th>Libelle</th>
            <th>Action </th>
            </tr>
            </thead>
            <tbody id="table-body">
            <?php while($donnees=$reponse->fetch()){ ?>
            <tr>
                <td> <?= $donnees['id_contact'] ?></td>
                <td> <?= $donnees['pseudo'] ?></td>
                <td> <?= $donnees['mail'] ?></td>
                <td> <?= $donnees['sujet'] ?></td>
                <td> <?= $donnees['libelle'] ?></td>
                <td>
                    <a class="row-action" href="edit.php?id=<?= $donnees['id_contact'] ?>">repondre</a>
                    <a class="row-action" href="delete.php?id=<?= $donnees['id_contact'] ?>&a=1">supprimer</a>
                </td>
            </tr>
            <?php }
            $reponse->closeCursor();
            ?>
            </tbody>
        </table>
    </div>
</div>
<br/><br/><br/>
-->

<!--
<div class="user">
 <h2 class="text-center">
 Users
 </h2>
    <div class="container">
    <div class="row">
        <div class="list_user col-sm-8 col-md-8 col-lg-7 col-xl-7 ">
            <?php
            $reponse = $bdd->query('SELECT * FROM userGhost');
            ?>
            <table class="table" id="table">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Prenom</th>
                    <th>nom</th>
                    <th>Mail</th>
                    <th>Action </th>
                    </tr>
                    </thead>
                    <tbody id="table-body">
                    <?php while($donnees=$reponse->fetch()){ ?>
                    <tr>
                        <td> <?= htmlspecialchars($donnees['id_user'])  ?></td>
                        <td> <?= htmlspecialchars($donnees['prenom'])  ?></td>
                        <td> <?= htmlspecialchars($donnees['nom'] ) ?></td>
                        <td> <?= htmlspecialchars($donnees['mail'])  ?></td>
                        <td>
                            <a class="row-action" href="edit.php?id=<?= $donnees['id_user'] ?>">modifier</a>
                            <a class="row-action" href="delete.php?id=<?= $donnees['id_user'] ?>&a=2">supprimer</a>
                        </td>
                    </tr>
                    <?php }
                    $reponse->closeCursor();
                    ?>
                    </tbody>
                </table>
        </div>
        <div class="ajout_user col-sm-4 col-md-4 col-lg-5 col-xl-5 ">
        <form method="POST" action="ajout_user.php" class="">

                        <legend class="text-center">Ajout User </legend>    
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control " name="prenom" id="prenom">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control " name="nom" id="nom">
                        <label for="email"> Email</label>
                        <input type="text" class="form-control " name="email" id="email">                        
                        <label for="domaine">login</label>
                        <input type="text" class="form-control " name="login" id="login">
                        <label for="theme">password</label>
                        <input type="password" class="form-control " name="pwd" id="pwd">
                        <label for="confirm_password">confirm password</label>
                        <input type="password" class="form-control " name="cfpwd" id="cfpwd">
                        <br/>
                        <button class="btn btn-dark" type="submit">Ajouter</button>
                    
                </form>
        </div>
    </div>
    </div>
</div>


<br/><br/><br/>
-->
<!--
<div class="blog">
<h2 class="text-center">
Blog
 </h2>
<div class="container">
    <?php
    $reponse = $bdd->query('SELECT * FROM BlogGhost');
    ?>
    <table class="table" id="table">
            <thead>
            <tr>
            <th>ID</th>
            <th>Prenom</th>
            <th>nom</th>
            <th>Mail</th>
            <th>domaine</th>
            <th>theme</th>
            <th>Article</th>
            <th>Date</th>
            <th>Statut </th>
            <th>Action </th>
            </tr>
            </thead>
            <tbody id="table-body">
            <?php while($donnees=$reponse->fetch()){ ?>
            <tr>
                <td> <?= $donnees['id_blog'] ?></td>
                <td> <?= $donnees['prenom'] ?></td>
                <td> <?= $donnees['nom'] ?></td>
                <td> <?= $donnees['mail'] ?></td>
                <td> <?= $donnees['domaine'] ?></td>
                <td> <?= $donnees['theme'] ?></td>
                <td> <?= $donnees['article'] ?></td>
                <td> <?= $donnees['date_publication'] ?></td>
                <td> <?= $donnees['statut'] ?></td>
                <td>
                    <?php
                    if($donnees['statut']=="public"){
                    ?>
                        <a class="row-action" href="delete.php?id=<?= $donnees['id_blog'] ?>">supprimer</a>
                    <?php  
                    }else{
                    ?>
                    <a class="row-action" href="edit.php?id=<?= $donnees['id_blog'] ?>">public</a>
                    <a class="row-action" href="delete.php?id=<?= $donnees['id_blog'] ?>&a=3">supprimer</a>
                    <?php
                        }
                    ?>
                </td>
            </tr>
            <?php }
            $reponse->closeCursor();
            ?>
            </tbody>
        </table>
    </div>
</div>
-->
<!--Code HTml client Connecte
    Profil Utilisateur
    Works
    
-->
<h1> Bonjour <?php echo $_SESSION['user']?> </h1>


</section>

<?php
}
?>
