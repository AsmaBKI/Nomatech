<?php
//connexion session
session_start();
//connexion base de donnees
require_once "../../admin/databaseNomaTech.php";

   
    //recuperation user auteur
    $id=($_POST['id_freelance']);
    $recupUse = $bdd->prepare('SELECT * FROM freelance WHERE id_freelance = ?');//requête SQL pour sélectionner toutes les colonnes de la table "user" où l'adresse e-mail et le mot de passe correspondent à ceux de l'utilisateur.
    $recupUse->execute(array($id));
    if($recupUse->rowCount()> 0){
   
        $_SESSION['id_freelance'] = $recupUse->fetch()['id_freelance'];
    }

    

    $getid= $_GET['id'];//récupère l'identifiant de l'utilisateur destinataire à partir de la méthode GET.
    //var_dump($getid);
    // vérifie si l'identifiant de l'utilisateur destinataire a été défini et s'il n'est pas vide.
    if(isset($getid)AND !empty($getid)){
       $recupUser = $bdd->prepare('SELECT * FROM freelance WHERE id_freelance = ?');
       $recupUser->execute(array($getid));
        if($recupUser->rowCount()> 0){
          if(isset($_POST['envoi'])){
                $message = htmlspecialchars($_POST['messages']);
                $insererMessage = $bdd->prepare('INSERT INTO messages(messages, id_destinataire, id_auteur)VALUES(?, ?, ?)');
                $insererMessage->execute(array($message, $getid ,$_SESSION['id_freelance']));
    
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
	<link rel="stylesheet" href="../style/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500;700&family=Open+Sans:wght@300;500&family=Oswald:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
	<title>Nomatech : Mes Message</title>
</head>
<body>

	<!------------------Navigation Central------------------>
	<header class="nav-central">
		<div class="Bloc-container1">
			<div class="logo-nav">
				<span><a href="../pageAccueil.php" style="font-family: 'Alkatra', serif; font-size: 40px; color: #240085; text-decoration:none">Noma'tech</a></span>
			</div>
		</div>

		<div class="bloc-container2">
			<a href="./entreprise/consultationProjet.php">Jobs</a>

			<a href="./freelance/consultationTalent.php">Talents</a>

			<a href="./connexion.php">Se connecter</a>

			<button class="inscription" onclick="window.location.href = './inscriptionInit.php';">
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
				<span class="ml-2"><a href="../pageAccueil.php" style="font-family: 'Alkatra', serif; font-size: 30px; color: #240085">Noma'tech</a></span>
			</div>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./entreprise/consultationProjet.php">Jobs</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./freelance/consultationTalent.php">Talents</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./connexion.php">Se connecter</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./inscriptionInit.php">S'inscrire gratuitement</a>
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
				<a href="#"><img src="../style/img/Mail contact.png" alt="Logo Contact" /></a>
			</div>
		</div>
	</nav>

<!-- creation d'un formulaire pour les messages . -->
<h1 class="text-logo mb-5 mt-3" style="font-family: Oswald, serif;"> Votre discussion </h1>

<form method="POST" action=" " align="center" >

    <div class="container-msg">
        <div class="txt-msg">
            <textarea class="message-form" name="messages"  placeholder="Ecrivez votre message..."></textarea>
        </div>
        <div class="sub-msg">
            <button type="submit" name ="envoi" class="" > <img src="../style/img/white-24dp/2x/outline_send_white_24dp.png" alt=""></button>
        </div>
    </div>



    <!-- afficher les messages que j'ai envoyer dans la section... 
 la boucle while récupère les messages en fonction de l'ID du 
 destinataire et de l'ID de l'auteur, puis affiche chaque message 
 à l'intérieur d'une balise <p>. -->

    <section id="messagesenvoyes"> 
        <?php
            $recupMessages = $bdd->prepare('SELECT * FROM messages WHERE id_destinataire = ? AND id_auteur = ? OR id_destinataire = ? AND id_auteur = ? ');
            $recupMessages->execute(array($getid,$_SESSION['id_freelance'],$_SESSION['id_freelance'],$getid ));

            while($messages = $recupMessages->fetch()){
                if($messages['id_destinataire'] == $_SESSION['id_user']){
        ?>  
        
                <div class="msg-in mt-3"> 
                    <p><?= $messages['messages'];?></p>
                </div> 
                <?php 
                        }elseif($messages['id_destinataire'] == $getid){
                ?>  
                <div class="msg-out mt-3 mb-5">
                <strong>MOI</strong> : <p> <?= $messages['messages'];?> </p>
            </div> 
        
        <?php 

                }   
            }

        ?>
    </section>
    
    	<!------------------ FOOTER ------------------>
	<div class="footer-dark mt-5">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3 item">
						<h3>Service</h3>
						<ul>
							<li><a href="./entreprise/consultationProjet.php">Jobs</a></li>
							<li><a href="./freelance/consultationTalent.php">Talents</a></li>
							<li><a href="./connexion.php">Se connecter</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-3 item">
						<h3>About</h3>
						<ul>
							<li><a href="../../team.php">Team</a></li>
							<li><a href="../../princing.php">Prix</a></li>
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