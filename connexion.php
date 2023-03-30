
<?php 
session_start();

require_once "./admin/databaseNomaTech.php"; // connection à la base de donnée


if(isset($_POST['envoi'])){

    if(!empty($_POST['email'])AND !empty($_POST['mdp'] )){

        $email=htmlspecialchars($_POST['email']);
        $mdp=sha1($_POST['mdp']);
        $recupUser = $bdd->prepare('SELECT * FROM user WHERE email = ? AND mdp = ?');
        $recupUser->execute(array($email, $mdp));

            if($recupUser->rowCount()> 0){
                $_SESSION['email'] = $email;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id_user'] = $recupUser->fetch()['id_user'];
                header('location: indexmessagerie.php');
            }else{
                header('location: nonconnexion.php');
            }
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
    <title>Espace de connexion</title>
</head>
<body>

<form method="POST" action=" "align="center" >

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
        <button type="submit" name ="envoi" class="btn btn-primary" > Se connecter </button>
    </div>
    
</body>
</html>