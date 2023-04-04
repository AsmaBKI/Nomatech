<?php //page pour que le freelance crée son profil
//se connection a une session utilisateur
session_start();
require_once "../../admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $db = new PDO("mysql:host=localhost;dbname=nomatech","root","root");
// Inscription depuis inscrip2803.php
$pseudo = htmlspecialchars($_POST['pseudo']);
$email = htmlspecialchars($_POST['email']);
$mdp = sha1($_POST['mdp']);

$bdd->query("INSERT INTO user(pseudo, mdp, email)VALUES('$pseudo','$mdp','$email')");

$recupUser = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?  AND email = ?');
$recupUser->execute(array($pseudo, $email));
if ($recupUser->rowCount() > 0) {
	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['mdp'] = $mdp;
	$_SESSION['email'] = $email;
	$_SESSION['id_user'] = $recupUser->fetch()['id_user'];
}

?>

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
	<title>Noma'Tech</title>
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
	<!------------------ PUBLICATION ------------------>
	<div class="container">
		<div class="row g-3 mt-5 mb-5">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card img-thumbnail border-primary">
					<img src="../style/img/inscriptionfreelance.png" class="card-img-top w-100" alt="...">
					<div class="card-body p-0 mt-1">
						<h5 class="card-title text-center">Pour les freelances</h5>
						<p class="card-text">Vous cherchez des missions afin de proposer vos services à des entreprises françaises en toute liberté géographique ?</p>
						<a href="./freelance/pageFreelanceFormProfil.php" class="btn btn-primary btn-block" style="font-family: 'Oswald', serif;">Cliquez ici</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<div class="card img-thumbnail border-primary">
					<img src="../style/img/inscriptionentreprise.png" class="card-img-top w-100" alt="...">
					<div class="card-body p-0 mt-1">
						<h5 class="card-title text-center">Pour les entreprises</h5>
						<p class="card-text">Vous recherchez des talents de façon ponctuelle, le full remote et les décalages horaires ne sont pas un problème ?</p>
						<a href="./entreprise/pageEntrepriseFormProfil.php" class="btn btn-primary btn-block" style="font-family: 'Oswald', serif;">Cliquez ici</a>
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
							<li><a href="./entreprise/consultationProjet.php">Jobs</a></li>
							<li><a href="./freelance/consultationTalent.php">Talents</a></li>
							<li><a href="./connexion.php">Se connecter</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-3 item">
						<h3>About</h3>
						<ul>
							<li><a href="../team.php">Team</a></li>
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