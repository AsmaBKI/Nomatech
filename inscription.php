<?php 
//se connection a une session utilisateur
session_start();
//creation objet PDO, le lien entre la bdd et php

$bdd = new PDO("mysql:host=localhost;dbname=nomatech;port=8889", "root", "root");

if(isset($_POST['envoi'])){

    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])AND !empty($_POST['email'])){
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $email=htmlspecialchars($_POST['email']);
        $mdp=sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO user(pseudo, mdp, email)VALUES(?, ?, ?)');
        $insertUser->execute(array($pseudo,$mdp,$email));


       
        //recuperer utilisateur pour demarrer sa session
        $recupUser = $bdd->prepare('SELECT * FROM user WHERE pseudo = ? AND mdp = ? AND email = ?');
        $recupUser->execute(array($pseudo, $mdp, $email));
            if($recupUser->rowCount()> 0){
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['email'] = $email;
                $_SESSION['id_user'] = $recupUser->fetch()['id_user'];

            }
            echo $_SESSION['id_user'];
                
        


    }

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
    
    <title>Espace d'inscription </title>
</head>
<body>
<form method="POST" action=" "align="center" >

    <div class="col-md-12 mt-4" >
        <label class="form-label" for="pseudo">Votre nom</label>
        <input type="text" name="pseudo" placeholder="Martin" required>
        <br/>
    </div>

    <div class="col-md-12 mt-4">
        <label class="form-label" for="email">Votre e-mail</label>
        <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
        <br/>
    </div>
    

    <div class="col-md-12 mt-4">
        <label class="form-label" for="mdo">Votre mot de passe </label>
        <input type="password" name ="mdp" required>
        <br/>
     </div>


    <div div class="form-button mt-3 ml-3">
        <button type="submit" name ="envoi" class="btn btn-primary" > S'inscrire </button>
    </div>
    
</form>

    
</body>
</html>