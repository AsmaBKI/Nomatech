<?php //page pour que le freelance crée son profil
$bdd = new PDO("mysql:host=localhost;dbname=nomatech;port=8889", "root", "root"); // connection à la base de donnée
// au lieu d'écrire la phrase  : $db = new PDO("mysql:host=localhost;dbname=nomatech","root","root"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
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
          <img src="./img/nomatech.png" alt="Logo de Noma'Tech" />
        </div>
      </div>

      <div class="bloc-container2">
        <a href="./consultationProjet.php">Jobs</a>

        <a href="#">Talents</a>

        <a href="#">Se connecter</a>

        <button class="inscription" onclick="window.location.href = './inscription.php';">
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

    <div class="bandeau bg-primary">
        <h1 class="col-5 font-weight-bold mt-5 ml-5">NOMA'TECH</h1>
        <h2 class="col-5 font-weight-bold mb-5 ml-5">Faites du monde votre bureau</h2>
    </div>

    <div class="container mt-5">
    
        <h2 class="text-center">Ils cherchent des talents</h2>
        <div class="row g-3 mt-5 mb-5">

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/entrepriseprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-3">
                        <h5 class="card-title text-center">Nom de l'entreprise</h5>
                        <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/entrepriseprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-3">
                        <h5 class="card-title text-center">Nom de l'entreprise</h5>
                        <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/entrepriseprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-3">
                        <h5 class="card-title text-center">Nom de l'entreprise</h5>
                        <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/entrepriseprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-3">
                        <h5 class="card-title text-center">Nom de l'entreprise</h5>
                        <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
            </div>

        </div>

        <h2 class="text-center">Ils cherchent des entreprises</h2>
        <div class="row g-3 mt-5 mb-5">

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-1">
                        <h5 class="card-title text-center">Pour les freelances</h5>
                        <p class="card-text mt-3">Spécialité<br>Localisation<br>Projet réalisé</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-1">
                        <h5 class="card-title text-center">Pour les entreprises</h5>
                        <p class="card-text mt-3">Spécialité<br>Localisation<br>Projet réalisé</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-1">
                        <h5 class="card-title text-center">Pour les freelances</h5>
                        <p class="card-text mt-3">Spécialité<br>Localisation<br>Projet réalisé</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail border-primary">
                    <img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-1">
                        <h5 class="card-title text-center">Pour les freelances</h5>
                        <p class="card-text mt-3">Spécialité<br>Localisation<br>Projet réalisé</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
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
