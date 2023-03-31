<?php //page pour que le freelance crée son profil
session_start();
require_once "./admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $db = new PDO("mysql:host=localhost;dbname=nomatech","root","root");
?>

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
    <header class="nav-central ">
      <div class="bloc-container1">
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
    <!------------------ Menu Burger------------------>
    <div class="bouton-rond">
      <div class="cont-ligne">
        <div class="ligne"></div>
      </div>
    </div>

    <!------------------Navigation Gauche------------------>

    <nav class="nav-gauche">
      <div class="bloc-menu-1">
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
          <a href="./inscrip2803.php">S'inscrire gratuitement</a>
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

      <div class="form-body mt-5"> <!--Bootstrap : mt-5 sert à définir la marge supérieur -->
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="ml-3" style="font-family: 'Oswald', serif;">Créer votre projet</h3>
                        <p class="ml-3" style="font-family: 'Oswald', serif;">Afin de trouver le freelance qui vous fera voyager, merci de compléter les informations nécessaire à votre projet</p>
                        <!-- formulaire en méthode GET : on récupère le résultat sur la page pageFreelanceFormProfilValidation.php-->
                        <form action="pageEntrepriseFormAnnonceValidation.php"  method="post" class="requires-validation">

                           <div class="col-md-12 mt-5">
                              <label for="exampleFormControlInput1" class="form-label">Quel est le nom de votre projet (ce nom sera visible par les freelances) ?</label>
                              <input type="text" name="project" class="form-control" id="exampleFormControlInput1" placeholder="Création d'un site internet en PHP" required>
                            </div>

                            <br>
                            <div class="col-md-12 mb-4">
                              <label for="exampleFormControlTextarea1" class="form-label">Description du projet 🖋️ </label>
                              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Nous souhaitons mettre en place un super site internet en PHP avec un super developpeur" required ></textarea>
                            </div>

                            <div class="col-md-12 mt-4">
                            <label for="exampleFormControlInput1" class="form-label">Quel est votre budget jounalier pour ce projet ? 💻</label>

                              <input type="radio" class="btn-check" name="budget" value="Moins de 100€" id="low" required>
                              <label class="btn btn-sm btn-outline-secondary"  for="low">Moins de 100€</label>

                              <input type="radio" class="btn-check" name="budget" value="Entre 100€ et 250€" id="medium" required>
                              <label class="btn btn-sm btn-outline-secondary"  for="medium">Entre 100€ et 250€</label>

                              <input type="radio" class="btn-check" name="budget" value="Entre 250€ et 500€"  id="big"  required>
                              <label class="btn btn-sm btn-outline-secondary" for="big">Entre 250€ et 500€</label>

                              <input type="radio" class="btn-check" name="budget" value="+ de 500€"  id="verybig"  required>
                              <label class="btn btn-sm btn-outline-secondary" for="verybig">+ de 500€</label>

                            </div>

                            <div class="col-md-12 mt-4">
                              <label for="exampleFormControlInput1" class="form-label">Date limite pour les candidatures</label>
                              <input type="date" class="form-control" name="date" id="exampleFormControlInput1" placeholder="" required>
                            </div>

                            <div class="col-md-12 mt-4">
                              <label for="exampleFormControlInput1" class="form-label">Date de début du projet</label>
                              <input type="date" class="form-control" name="dateinit" id="exampleFormControlInput1" placeholder="" required>
                            </div>

                            <div class="col-md-12 mt-4">
                              <label for="exampleFormControlInput1" class="form-label">Réponse sous combien de jour après la date limite des candidatures ?</label>
                              <input type="text" class="form-control" name="reponse" id="exampleFormControlInput1" placeholder="10 jours" required>
                            </div>

                            <br><br>
                            <div class="form-button mt-3 ml-3">
                                <button id="submit" type="submit" class="btn btn-primary" style="font-family: 'Oswald', serif;">Publier mon projet</button>
                            </div>
                            <br><br>
                        </form>
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
              <h3>Service</h3>
              <ul>
                <li><a href="./consultationProjet.php">Jobs</a></li>
                <li><a href="./index.php">Talents</a></li>
                <li><a href="./connexion.php">Se connecter</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
              <h3>About</h3>
              <ul>
                <li><a href="#">Team</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3 item text">
              <h3>Contact</h3>
              <p>Nomatech</p>
              <p>3 rue Armand Moisant</p>
              <p>75015 Paris</p>
              <p>01.55.65.53.57</p>
            </div>
            <div class="col item social">
              <a href="https://www.instagram.com/nomatech.fr/" target="_blank"><i class="icon ion-social-instagram"></i></a>
              <br><br>
              <a href="https://www.linkedin.com/in/noma-tech-81a019270/" target="_blank"><i class="icon ion-social-linkedin"></i></a>
            </div>
          </div>
          <p class="copyright">Noma'Tech © 2023</p>
        </div>
      </footer>
    </div>
  </body>
  <script src="./app.js"></script>