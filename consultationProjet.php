<?php
//se connection a une session utilisateur
session_start();
require_once "./admin/databaseNomaTech.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./style.css">    
    <title>Noma'Tech : Liste des projets disponibles</title>
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
    <div class="container site">
      <h1 class="text-logo mt-5"> Liste des projets disponibles </h1>

      <!-- ********************** BARRE DE RECHERCHE ************************* -->

      <form class="text-center" action = "" method = "get">
        <input type = "search" class="col-6 mt-5 mb-5 mr-5 img-thumbnail border-primary" name = "terme">
        <input type = "submit" class="btn btn-primary" name = "s" value = "Rechercher">
        </form>
      
      <!-- ********************** AFFICHAGE DE TOUS LES PROJETS ************************* -->

    <?php
      //$db = new PDO("mysql:host=localhost;dbname=nomatech","root","root");
      $statement = $bdd -> query('SELECT projet.id_projet, projet.project, projet.description, projet.budget, projet.date, projet.dateinit, projet.reponse FROM projet');

      echo '<div class="tab-content">';
      echo '<div class="tab-pane active". id="1"></div>';
      echo '<div class="row">';

      while ($item = $statement -> fetch())
      {
          echo '<div class="col-sm-6 col-md-10 mt-4">';
              echo '<div class="img-thumbnail border-primary">';

                  //echo '<img class="img-photo" src="'.$item['image'].'" alt="Pas de photo disponible">';
                  echo '<h4> '. $item['project'].'</h4>';
                  echo '<p> Description : <br>'. $item['description'] .'</p>';
                  echo '<p> Budget journalier : '. $item['budget'] .'</p>';
                  echo '<p> Date limite pour les candidatures : '. $item['date'] .'</p>';
                  echo '<p> Réponse sous '. $item['reponse'] .' après la date limite des candidatures </p>';
                  echo '<p> Date de début du projet : '. $item['dateinit'] .'</p>';
                  
                  echo '<a href ="#" class="btn btn-default btn-primary" role="button">Contacter</span> </a>';
                      
              echo '</div>';
          echo '</div>';
      }

      echo '</div>';
      echo '</div> ';
    ?> 
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
  <script src="./app.js"></script>
</html>
