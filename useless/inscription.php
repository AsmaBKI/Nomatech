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
        $insertUser = $bdd->prepare('INSERT INTO user(pseudo, mdp,
email)VALUES(?, ?, ?)'); $insertUser->execute(array($pseudo,$mdp,$email));
//recuperer utilisateur pour demarrer sa session $recupUser =
$bdd->prepare('SELECT * FROM user WHERE pseudo = ? AND mdp = ? AND email = ?');
$recupUser->execute(array($pseudo, $mdp, $email)); if($recupUser->rowCount()>
0){ $_SESSION['pseudo'] = $pseudo; $_SESSION['mdp'] = $mdp; $_SESSION['email'] =
$email; $_SESSION['id_user'] = $recupUser->fetch()['id_user']; } echo
$_SESSION['id_user']; } } ?>
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

    <title>Espace d'inscription</title>
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
    <div class="content">
      <div class="container-inscription">
        <h2>Inscrivez-vous.</h2>

        <form method="POST" action=" " align="center">
          <div class="input-group">
            <label for="user">Nom d'utilisateur</label>
            <div class="icon-input-container">
              <input
                type="text"
                autocomplete="off"
                id="user"
                placeholder="3 caractères minimum"
                maxlength="24"
              />
              <img
                src="ressources/check.svg"
                alt="icone de validation"
                class="icone-verif"
              />
            </div>
            <span class="error-msg"
              >Choisissez un pseudo contenant au moins 3 caractères.</span
            >
          </div>

          <div class="input-group">
            <label for="email">Entrez votre email</label>
            <div class="icon-input-container">
              <input
                type="text"
                autocomplete="off"
                id="email"
                placeholder="Votre email"
              />
              <img
                src="ressources/check.svg"
                alt="icone de validation"
                class="icone-verif"
              />
            </div>
            <span class="error-msg">Rentrez un email valide.</span>
          </div>

          <div class="input-group">
            <label for="password">Mot de passe</label>
            <div class="icon-input-container">
              <input
                type="password"
                autocomplete="off"
                id="password"
                placeholder="Votre mot de passe"
              />
              <img
                src="ressources/check.svg"
                alt="icone de validation"
                class="icone-verif"
              />
            </div>
            <span class="pswd-info"
              >Au moins un symbole, un chiffre, ainsi que 6 caractères
              minimum.</span
            >
            <div class="lines">
              <div class="l1"><span>faible</span></div>
              <div class="l2"><span>moyen</span></div>
              <div class="l3"><span>fort</span></div>
            </div>
          </div>

          <div class="input-group">
            <label for="psw-confirmation">Confirmez le mot de passe</label>
            <div class="icon-input-container">
              <input
                type="password"
                autocomplete="off"
                id="psw-confirmation"
                placeholder="Confirmez le mot de passe"
              />
              <img
                src="ressources/check.svg"
                alt="icone de validation"
                class="icone-verif"
              />
            </div>
          </div>

          <button type="submit">Création du compte</button>
        </form>
      </div>
    </div>
    <!------------------ FOOTER ------------------>
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
