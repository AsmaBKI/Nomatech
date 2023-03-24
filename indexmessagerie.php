<?php
//se connecter à la session du user 
session_start();

//se connecter a la base de données
$bdd = new PDO("mysql:host=localhost;dbname=nomatech;port=8889", "root", "root");

//verifier que le user est bien connecté a sa session
if(!$_SESSION['email'] AND !$_SESSION['mdp']){
    header('location: connexion.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Clients</title>
</head>
<body>

        <?php
            //afficher tous les utilisateurs du site 
            $recupUser = $bdd->query('SELECT * FROM user');

            //selectionner un user a contacter 
            while($user = $recupUser->fetch()){
                ?>   
                <!-- afficher l'id de l'utilisateur en parametres dans la barre en haut... -->
                <a href="message.php?id=<?php echo $user['id_user'];?>">
                   <p><?php echo $user['pseudo']; ?></p>
                </a>
                <?php

            }

        ?>
    
</body>
</html>