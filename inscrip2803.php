<?php 
//se connection a une session utilisateur
session_start();
//creation objet PDO, le lien entre la bdd et php

require_once "./admin/databaseNomaTech.php";

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
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500;700&family=Open+Sans:wght@300;500&family=Oswald:wght@200&display=swap" rel="stylesheet">
    
    <title>Espace d'inscription </title>
</head>
<body>
    <!------------------Navigation Central------------------>
    <header class="nav-central">
      <div class="Bloc-container1">
        <div class="logo-nav">
          <span style="font-family: 'Alkatra', serif;serif; font-size: 40px; color: #240085" >Noma'tech</span>
        </div>
      </div>

      <div class="bloc-container2">
        <a href="#">Jobs</a>

        <a href="#">Talents</a>

        <a href="#">Se connecter</a>

        <button class="inscription" onclick="window.location.href = '#';">
          S'inscrire
        </button>
      </div>
    </header>
    <!------------------ Menu Burger------------------>
    <div class="bouton-rond">
      <div class="cont-ligne">
        <div class="ligne"></div>
      </div>
    </div>

    <!------------------Navigation Gauche------------------>

    <nav class="nav-gauche">
      <div class="bloc-menu">
        <div class="logo">
          <img src="./img/nomatech_gauche.png" alt="Logo de Noma'Tech" />
        </div>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="#">Jobs</a>
        </span>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="#">Talents</a>
        </span>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="#">Se connecter</a>
        </span>
      </div>
      <div class="bloc-menu" >
        <span class="nav-menu-item">
          <a href="#">S'inscrire gratuitement</a>
        </span>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="#">A propos de</a>
        </span>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="#">Contact</a>
        </span>
      </div>
      <div class="bloc-menu">
        <div class="logo-contact">
          <a href="#"
            ><img src="./img/Mail contact.png" alt="Logo Contact"
          /></a>
        </div>
      </div>
    </nav>
    <!------------------ Login Form------------------>

<div class="container">
<div class="row g-3 mt-3 mb-5">
<div class="paragrapheimg col-4">
    <img class="" style="width:100%"  src="./img/inscription.png">
</div>
<div class="form-body mt-5">
    <div class="row">
        <div class="form-holder"> 
            <div class="form-content">
                <div class="form-items">  
                   
                     <form method="POST" action=" "align="" >
                
                        <div class="col-md-12 mt-4" >
                            <label  for="pseudo" style="font-family: 'Alkatra', serif;">Votre nom</label>
                            <input type="text" class="form-control" name="pseudo"  placeholder="Martin" required>
                            <br/>
                        </div>

                        <div class="col-md-12 mt-4">
                            <label  for="email" style="font-family: 'Alkatra', serif;">Votre e-mail</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="monadresse@mail.com" required>
                            <br/>
                        </div>
                        

                        <div class="col-md-12 mt-4">
                            <label  for="mdo" style="font-family: 'Alkatra', serif;">Votre mot de passe </label>
                            <input type="password" class="form-control" name ="mdp" required>
                            <br/>
                        </div>


                        <div div class="form-button mt-3 ml-3">
                            <button  style="font-family: 'Alkatra', serif;" type="submit" name ="envoi" onclick="window.location.href = './inscriptionJulien.php';" class="btn btn-primary" > S'inscrire </button>
                        </div>
                        
                    </form>
                 </div>
         </div>
    </div>
</div>
</div>
</div>

</div>
    <!------------------ FOOTER ------------------>
<div class="footer-dark mt-5"> 
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Services</h3>
              <ul>
                <li><a href="#">Web design</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Hosting</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
              <h3>About</h3>
              <ul>
                <li><a href="#">Company</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </div>
            <div class="col-md-6 item text">
              <h3>Noma'Tech</h3>
              <p>
                Praesent sed lobortis mi. Suspendisse vel placerat ligula.
                Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis
                tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel
                in justo.
              </p>
            </div>
            <div class="col item social">
              <a href="#"><i class="icon ion-social-facebook"></i></a
              ><a href="#"><i class="icon ion-social-twitter"></i></a
              ><a href="#"><i class="icon ion-social-snapchat"></i></a
              ><a href="#"><i class="icon ion-social-instagram"></i></a>
            </div>
          </div>
          <p class="copyright">Noma'Tech © 2023</p>
        </div>
      </footer>
</div>
    
</body>
<script src="app.js"></script>

</html>