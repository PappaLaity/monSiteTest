<?php
session_start();

include ("connect.php");
include ("header.php");

if(isset($_GET)){
    $errors=[];
    if(!isset($_GET["id"]) or empty($_GET["id"])){
        //pareigoul

    }
    

}

if(empty($errors)){
    $reponse = $bdd->exec('UPDATE BlogGhost Set statut=\"public\" where id_blog=$_GET["id"]');   

}



?>