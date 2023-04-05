<?php
session_start();

require_once "../../admin/databaseNomaTech.php"; // connection à la base de donnée


if (isset($_POST['envoi'])) {

	if (!empty($_POST['email']) and !empty($_POST['mdp'])) {

		$email = htmlspecialchars($_POST['email']);
		$mdp = sha1($_POST['mdp']);
		$recupUser = $bdd->prepare('SELECT * FROM user WHERE email = ? AND mdp = ?');
		$recupUser->execute(array($email, $mdp));

		if ($recupUser->rowCount() > 0) {
			$_SESSION['email'] = $email;
			$_SESSION['mdp'] = $mdp;
			$_SESSION['id_user'] = $recupUser->fetch()['id_user'];
			header('location: ./freelance/consultationTalent.php');
		} else {
			header('location: ./nonconnexion.php');
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



	<div class="container">
		<div class="col-12">
			<div class="row g-3 mb-5 mt-4">
				<div class="col-lg-4 col-md-6 text-center">
					<img src="../style/img/connexion1.png" class="w-100 rounded">
				</div>
				<div class="form col-lg-4 col-md-6 mt-5">
					<form method="POST" action=" " align="center">
						<div>
							<label class="form-label" for="email" style="font-family: 'Oswald', serif;">Votre e-mail</label>
							<input type="email" id="email" class="form-control" name="email" placeholder="monadresse@mail.com" required>
							<br />
						</div>

						<div>
							<label class="form-label" for="mdo" style="font-family: 'Oswald', serif;">Votre mot de passe </label>
							<input type="password" class="form-control" name="mdp" required>
							<br />
						</div>

						<div>
							<button type="submit" name="envoi" class="btn btn-primary" style="font-family: 'Oswald', serif;"> Se connecter </button>
						</div>
					</form>
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
<script src="./app.js"></script>

</html>