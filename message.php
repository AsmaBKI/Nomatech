<?php
//connexion session
session_start();
//connexion base de donnees
require_once "./admin/databaseNomaTech.php";
//securité (si l'utililisateur n'est pas connecté ou n'a pas de compte)
if(!$_SESSION['email'] AND !$_SESSION['mdp']){ 

    //vérifie si l'utilisateur est connecté. 
    //Si l'utilisateur n'est pas connecté, il est redirigé vers la page de connexion "connexion.php".
    header('location: connexion.php');}
   
    //recuperation user auteur
    $email=htmlspecialchars($_POST['email']);
    $mdp=sha1($_POST['mdp']);
    $recupUse = $bdd->prepare('SELECT * FROM user WHERE email = ? AND mdp = ?');//requête SQL pour sélectionner toutes les colonnes de la table "user" où l'adresse e-mail et le mot de passe correspondent à ceux de l'utilisateur.
    $recupUse->execute(array($email, $mdp));
    if($recupUse->rowCount()> 0){
        $_SESSION['email'] = $email;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['id_user'] = $recupUse->fetch()['id_user'];
    }

    var_dump($_SESSION['id_user'] );
    

    $getid= $_GET['id'];//récupère l'identifiant de l'utilisateur destinataire à partir de la méthode GET.
    var_dump($getid);
    // vérifie si l'identifiant de l'utilisateur destinataire a été défini et s'il n'est pas vide.
    if(isset($getid)AND !empty($getid)){
       $recupUser = $bdd->prepare('SELECT * FROM user WHERE id_user = ?');
       $recupUser->execute(array($getid));
        if($recupUser->rowCount()> 0){
          if(isset($_POST['envoi'])){
                $message = htmlspecialchars($_POST['messages']);
                $insererMessage = $bdd->prepare('INSERT INTO messages(messages, id_destinataire, id_auteur)VALUES(?, ?, ?)');
                $insererMessage->execute(array($message, $getid ,$_SESSION['id_user']));
    
            } else{echo "aucun utilisateur trouvé";}

        }else{echo "aucun udentifiant trouvé";}
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Messages</title>
</head>
<body>
<!-- creation d'un formulaire pour les messages . -->
<form method="POST" action=" " align="center" >

    <div class="container-msg">
        <div class="txt-msg">
            <textarea class="message-form" name="messages"  placeholder="Ecrivez votre message..."></textarea>
        </div>
        <div class="sub-msg">
            <button type="submit" name ="envoi" class="" > <img src="./img/white-24dp/2x/outline_send_white_24dp.png" alt=""></button>
        </div>
    </div>



    <!-- afficher les messages que j'ai envoyer dans la section... 
 la boucle while récupère les messages en fonction de l'ID du 
 destinataire et de l'ID de l'auteur, puis affiche chaque message 
 à l'intérieur d'une balise <p>. -->

    <section id="messagesenvoyes"> 
        <?php
            $recupMessages = $bdd->prepare('SELECT * FROM messages WHERE id_destinataire = ? AND id_auteur = ? OR id_destinataire = ? AND id_auteur = ? ');
            $recupMessages->execute(array($getid,$_SESSION['id_user'],$_SESSION['id_user'],$getid ));

            while($messages = $recupMessages->fetch()){
                if($messages['id_destinataire'] == $_SESSION['id_user']){
        ?>  
        
                <div class="msg-in mt-3"> 
                    <p><?= $messages['messages'];?></p>
                </div> 
                <?php 
                        }elseif($messages['id_destinataire'] == $getid){
                ?>  
                <div class="msg-out mt-3">
                <strong>MOI</strong> : <p> <?= $messages['messages'];?> </p>
            </div> 
        
        <?php 

                }   
            }

        ?>
    </section>
    
</body>
</html>