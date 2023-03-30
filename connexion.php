
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500;700&family=Open+Sans:wght@300;500&family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <title>Noma'Tech</title>
  </head>
  <body>
    <!------------------Navigation Central------------------>
    <header class="nav-central">
      <div class="Bloc-container1">
        <div class="logo-nav">
          <span><a href="./testaccueil.php" style="font-family: 'Alkatra', serif; font-size: 40px; color: #240085; text-decoration:none">Noma'tech</a></span>
        </div>
      </div>

      <div class="bloc-container2">
        <a href="./consultationProjet.php">Jobs</a>

        <a href="./index.php">Talents</a>

        <a href="./connexion.php">Se connecter</a>

        <button class="inscription" onclick="window.location.href = './inscrip2803.php';">
          S'inscrire
        </button>
      </div>
    </header>
    <!------------------ Menu Burger--------------------->
    <div class="bouton-rond">
      <div class="cont-ligne">
        <div class="ligne"></div>
      </div>
    </div>

    <!------------------Navigation Gauche------------------>

    <nav class="nav-gauche">
      <div class="bloc-menu">
        <div class="logo">
          <span class="ml-2"><a href="./testaccueil.php" style="font-family: 'Alkatra', serif; font-size: 30px; color: #240085">Noma'tech</a></span>
        </div>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="./consultationProjet.php">Jobs</a>
        </span>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="./index.php">Talents</a>
        </span>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="./connexion.php">Se connecter</a>
        </span>
      </div>
      <div class="bloc-menu">
        <span class="nav-menu-item">
          <a href="./inscription.php">S'inscrire gratuitement</a>
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

    

        <div class="container">
            <div class="col-12">
                <div class="row g-3 mb-5 mt-4">
                    <div class="form col-7 mt-5">
                        <form method="POST" action=" " align="center" >
                            <div>
                                <label class="form-label" for="email">Votre e-mail</label>
                                <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
                                <br/>
                            </div>

                            <div>
                                <label class="form-label" for="mdo">Votre mot de passe </label>
                                <input type="password" name ="mdp" required>
                                <br/>
                            </div>

                            <div>
                                <button type="submit" name ="envoi" class="btn btn-primary" > Se connecter </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-5 text-center">
                        <img src="./img/connexion.png" class="w-75 rounded"> 
                    </div >
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
              <a href="#"><i class="icon ion-social-facebook"></i></a>
              <a href="#"><i class="icon ion-social-twitter"></i></a>
              <a href="#"><i class="icon ion-social-snapchat"></i></a>
              <a href="#"><i class="icon ion-social-instagram"></i></a>
            </div>
          </div>
          <p class="copyright">Noma'Tech © 2023</p>
        </div>
      </footer>
    </div>
  </body>
  <script src="./app.js"></script>
</html>
