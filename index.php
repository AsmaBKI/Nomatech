<?php //page pour que le freelance crée son profil
require_once "./admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $db = new PDO("mysql:host=localhost;dbname=nomatech","root","root");
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
            <span class="ml-2" style="font-family: 'Alkatra', serif; font-size: 30px; color: #240085"><a href="./testaccueil.php">Noma'tech</a></span>
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

        <div class="container mt-5">
            <!-- <a href="./admin/index.php" class="btn btn-light"> Liste des produits </a> 
            <a href="./admin/insert.php" class="btn btn-light"> Ajouter un produit </a>  -->
            <h1 class="text-logo mb-5" style="font-family: 'Oswald', serif;"> Liste des freelances disponibles </h1>
            
            <?php
        
            $statement = $bdd -> query('SELECT freelance.id_freelance, freelance.freelance_name, freelance.freelance_job, freelance.freelance_country, freelance.freelance_tjm, freelance.freelance_experience, freelance.freelance_description FROM freelance');

            echo '<div class="tab-content">';
            echo '<div class="tab-pane active". id="1"></div>';
            echo '<div class="row">';

            while ($item = $statement -> fetch())
            {
                echo '<div class="col-sm-6 col-md-4 mb-2">';
                        echo '<div class="img-thumbnail">';
                            //echo '<img class="img-photo" src="'.$item['image'].'" alt="Pas de photo disponible">';
                            echo '<h4>'. $item['freelance_job'].'</h4>';
                            echo '<p>'. $item['freelance_name'].'</p>';
                            //echo '<p>'. $item['freelance_description'] .'</p>';
                            echo '<p> Expérience : '. $item['freelance_experience'].'</p>';
                            echo '<div class="price"> TJM : '. $item['freelance_tjm'] .'€'. '</div>';
                            echo '<div class="caption1">';
                                
                                echo '<a href ="" class="btn btn-default btn-primary mt-3" role="button">Contacter '.$item['freelance_name'].'</span> </a>';
                            echo '</div>';
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
</html>