<?php 
session_start();


$bdd = new PDO("mysql:host=localhost;dbname=nomatech;port=8889", "root", "root");

if(isset($_POST['envoi'])){

    if(!empty($_POST['email'])AND !empty($_POST['mdp'] )){

        $email=htmlspecialchars($_POST['email']);
        $mdp=sha1($_POST['mdp']);
        $recupUser = $bdd->prepare('SELECT * FROM user WHERE email = ? AND mdp =
?'); $recupUser->execute(array($email, $mdp)); if($recupUser->rowCount()> 0){
$_SESSION['email'] = $email; $_SESSION['mdp'] = $mdp; $_SESSION['id_user'] =
$recupUser->fetch()['id_user']; header('location: indexmessagerie.php'); }else{
header('location: nonconnexion.php'); } } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Espace de connexion</title>
  </head>
  <body>
    <!------------------Navigation Central------------------>
    <header class="nav-central">
      <div class="Bloc-container1">
        <div class="logo-nav">
          <img src="./img/nomatech.png" alt="Logo de Noma'Tech" />
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
      <div class="bloc-menu">
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
    <div class="content-connexion">
      <div class="wrapper">
        <div class="title">Se connecter</div>
        <form method="POST" action=" " align="center">
          <div class="field">
            <input type="text" required />
            <label>Email</label>
          </div>
          <div class="field">
            <input type="password" required />
            <label>Mot de passe</label>
          </div>
          <div class="content">
            <!-- <div class="checkbox">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Se souvenir de moi</label>
          </div> -->
            <div class="pass-link"><a href="#">Mot de passe oublié?</a></div>
          </div>
          <div class="field">
            <input type="submit" value="Se connecter" />
          </div>
          <div class="signup-link">Pas inscrit? <a href="#">S'inscrire</a></div>
        </form>
      </div>
    </div>
    <div class="footer-dark">
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
