<?php 
//declaration de la session
session_start();
$_SESSION = array();
session_destroy();
header('location: connexion.php');
?>