<?php
//se connecter à la session du user 
session_start();

//se connecter a la base de données
require_once "./admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $db = new PDO("mysql:host=localhost;dbname=nomatech","root","root");

//verifier que le user est bien connecté a sa session
if(!$_SESSION['email'] AND !$_SESSION['mdp']){
    header('location: connexion.php');

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les Clients</title>
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

        <?php
            //afficher tous les utilisateurs du site 
            $recupUser = $bdd->query('SELECT * FROM user');

            //selectionner un user a contacter 
            while($user = $recupUser->fetch()){
                ?>   
                <!-- afficher l'id de l'utilisateur en parametres dans la barre en haut... -->
                <a href="message.php?id=<?php echo $user['id_user'];?>">
                   <p><?php echo $user['pseudo']; ?></p>
                </a>
                <?php

            }

        ?>
    
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
</html>