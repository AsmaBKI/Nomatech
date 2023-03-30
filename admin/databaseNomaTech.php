<?php 
// objectif : ligne 4 de connection à obtenir 
//$db = new PDO("mysql:host=localhost;dbname=patisserie","root","root");

//identifiant login
define('DB_HOST','51.91.101.108'); // ou Ip sur serveur SQL
define('DB_NAME','nomatech'); // nom de la base de donnée que j'ai créé
define('DB_DSN', 'mysql:host='.DB_HOST.';'.'dbname='.DB_NAME );

$userName = 'nomatech';
$userPassword = 'uoidI&Tn1gXGJ2Dr1MBUkR5GJJewLY';

//connection à la base de donnée
$bdd = new PDO(DB_DSN,$userName,$userPassword);
?>