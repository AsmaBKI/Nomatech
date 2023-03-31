<?php //page pour que le freelance crée son profil
session_start();
require_once "./admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $bdd = new PDO("mysql:host=localhost;dbname=nomatech","root","root");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500;700&family=Open+Sans:wght@300;500&family=Oswald:wght@200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap" rel="stylesheet">
  <!-- Lien vers la page CSS -->
  <link rel="stylesheet" href="style.css"> 
  <!-- Lien CDN pour utiliser Bootstrap 5.0.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Nomatech : Formulaire création de profil Freelance</title>
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
      <div class="form-body mt-5"> <!--Bootstrap : mt-5 sert à définir la marge supérieur -->
        <div class="row">
          <div class="form-holder">
            <div class="form-content">
              <div class="form-items">
                          <h3 style="font-family: 'Oswald', serif;">Créer votre profil Freelance</h3>
                          <p style="font-family: 'Oswald', serif;">Avant de trouver la mission de vos rêves, merci de compléter votre profil</p>
                          <!-- formulaire en méthode GET : on récupère le résultat sur la page pageFreelanceFormProfilValidation.php-->
                          <form action="pageFreelanceFormProfilValidation.php"  method="post" class="requires-validation" enctype="multipart/form-data">
                            <div class="col-md-12 mt-5">
                                <label for="exampleFormControlInput1" class="form-label">Quel est votre prénom (ce prénom sera visible par les entreprises) ?</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="John Doe" required>
                              </div>
                              <div class="col-md-12 mt-4">
                                <label for="exampleFormControlInput1" class="form-label">Quel est votre métier ? 💻</label>
                                <input type="text" name="job" class="form-control" id="exampleFormControlInput1" placeholder="développeur JS, développeur Front, sénior BI, junior intégrateur ..." required>
                              </div>

                              <div class="col-md-12 mt-4">
                                <label for="exampleFormControlInput1" class="form-label">Dans quel pays être-vous actuellement? 🌍</label>
                                <input type="text" class="form-control" name="country" id="exampleFormControlInput1" placeholder="Faites-nous réver!"required>
                              </div>

                              <div class="col-md-12 mt-4">
                                <label for="exampleFormControlInput1" class="form-label">Votre salaire journalier ?</label>
                                <input type="text" class="form-control" name="tjm" id="exampleFormControlInput1" placeholder="En euros, dollars? " required>
                              </div>

                              <div class="col-md-12 mt-4">
                                <label class="mb-3 mr-1" for="level1">Quel est votre niveau d'expérience ? </label>

                                <input type="radio" class="btn-check" name="level" value="0 à 2 ans" id="junior" required>
                                <label class="btn btn-sm btn-outline-secondary"  for="junior">0 à 2 ans</label>

                                <input type="radio" class="btn-check" name="level" value="2 à 7 ans" id="medium" required>
                                <label class="btn btn-sm btn-outline-secondary"  for="medium">2 à 7 ans</label>

                                <input type="radio" class="btn-check" name="level" value="7 ans et +"  id="senior"  required>
                                <label class="btn btn-sm btn-outline-secondary" for="senior">7 ans et +</label>

                              </div>

                              <div class="mb-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Votre description 🖋️ </label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required ></textarea>
                              </div>

                              <label>Ajouter une photo de profil : </label>
                              <input type="file" name="image">

                              <div class="form-button mt-5 ml-3">
                                  <button id="submit" type="submit" class="btn btn-primary" style="font-family: 'Oswald', serif;">Publier mon profil</button>
                              </div>
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
</html>