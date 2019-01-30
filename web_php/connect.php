<?php
 try{
    $bdd = new PDO('mysql:host=localhost;dbname=GhostWebSite', 'root', '');
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}
?>