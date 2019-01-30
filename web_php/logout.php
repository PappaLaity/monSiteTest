<?php
session_start();
unset($_SESSION['user']);
header('Location: index.php');
$_SESSION['flash']['success'][] = "Vous êtes maintenant déconnectés!";
exit();