<?php //page pour que le freelance crée son profil
//se connection a une session utilisateur
session_start();
require_once "../admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $db = new PDO("mysql:host=localhost;dbname=nomatech","root","root");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./style/style.css">
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
				<span><a href="./pageAccueil.php" style="font-family: 'Alkatra', serif; font-size: 40px; color: #240085; text-decoration:none">Noma'tech</a></span>
			</div>
		</div>

		<div class="bloc-container2">
			<a href="./features/entreprise/consultationProjet.php">Jobs</a>

			<a href="./features/freelance/consultationTalent.php">Talents</a>

			<a href="./features/connexion.php">Se connecter</a>

			<button class="inscription" onclick="window.location.href = './features/inscriptionInit.php';">
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
				<span class="ml-2"><a href="./pageAccueil.php" style="font-family: 'Alkatra', serif; font-size: 30px; color: #240085">Noma'tech</a></span>
			</div>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./features/entreprise/consultationProjet.php">Jobs</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./features/freelance/consultationTalent.php">Talents</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./features/connexion.php">Se connecter</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="./features/inscriptionInit.php">S'inscrire gratuitement</a>
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
				<a href="#"><img src="./style/img/Mail contact.png" alt="Logo Contact" /></a>
			</div>
		</div>
	</nav>

	<!--
        <h1 class="col-5 font-weight-bold mt-5 ml-5">NOMA'TECH</h1>
        <h2 class="col-5 font-weight-bold mb-5 ml-5">Faites du monde votre bureau</h2>
     -->
	<div class="body-part1">
		<div class="container">
			<div class="bandeau col-12">
				<div class="row g-3 mb-5 mt-4">
					<div class="paragraphetext col-lg-4 col-md-6 align-self-center">
						<h1 class="text-center" style="font-family: 'Oswald', serif;">
							Voici Noma'Tech, votre partenaire job!
						</h1>
						<!-- <h2 class="text-center" style="font-family: 'Alkatra', serif;">
              Vous allez adorer cette nouvelle façon de collaborer !</h2> -->
						<br>
						<h2 class="text-center" style="font-family: 'Oswald', serif;">
							Changez de destination, pas de boulot ! ✈️
						</h2>
					</div>
					<div class="paragrapheimg col-lg-4 col-md-6 mt-5 mb-5 ">
						<img class="w-100" style="border-radius:10px" src="./style/img/digitalnomad1.png">
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container mt-4">
		<div class="row col-12">
			<div class="row col-lg-4 col-md-6">
				<div>
					<h1 class="text-center " style="font-family: 'Oswald', serif;">
						VOUS ETES <br>UNE ENTREPRISE ? </h1>
				</div>
				<img src="./style/img/img-entreprise.png">
			</div>


			<div class="row col-lg-4 col-md-6">
				<div>
					<h1 class="text-center " style="font-family: 'Oswald', serif;">
						VOUS ETES <br>UN DIGITAL NOMAD ? </h1>
				</div>
				<img src="./style/img/img-freelance.png">
		
			</div>
		</div>
	</div>

	<!-- Partie Entreprise -->
	<div class="body-part-3">
		<div class="container mt-4">
			<div class="row g-3 mt-3 mb-5" style="">


				<h2 class="text-center mt-5 mb-5" style="font-family: 'Oswald', serif;"> Ils cherchent des talents : trouvez l'entreprise parfaite pour propulser votre carrière </h2>

				<!-- PHP pour afficher 4 entreprises clientes-->
				<?php

				$statement = $bdd->query('SELECT id_entreprise, name, image  FROM entreprise ORDER BY id_entreprise DESC LIMIT 4');


				// SELECT name,image FROM entreprise');
				// freelance.id_freelance, freelance.freelance_name, freelance.freelance_job, freelance.freelance_country, freelance.freelance_tjm, freelance.freelance_experience, freelance.freelance_description FROM freelance');

				while ($item = $statement->fetch()) {
					echo '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">';
					echo '<div class="card img-thumbnail">';
					echo '<img src="' . $item['image'] . '" class="card-img-top w-100" style="height: 120px;" alt="..."/>';
					echo '<div class="card-body p-0 mt-3">';
					echo '<h5 class="card-title text-center">' . $item['name'] . '  <br> ➜ </h5>';
					// <!-- <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p> -->
					// echo '<a href="#" class="btn btn-primary btn-block">Consulter</a>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
				?>
				<!-- <div class="col-12 col-md-6 col-lg-3 " >
                <div class="card img-thumbnail ">
                    <img src="./img/entrepriseprovisoire.jpg" class="card-img-top w-100" alt="..."/>
                    <div class="card-body p-0 mt-3">
                        <h5 class="card-title text-center">Nom de l'entreprise</h5>
                         <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail ">
                    <img src="./img/entrepriseprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-3">
                        <h5 class="card-title text-center">Nom de l'entreprise</h5>
                        <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="card img-thumbnail ">
                    <img src="./img/entrepriseprovisoire.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body p-0 mt-3">
                        <h5 class="card-title text-center">Nom de l'entreprise</h5>
                        <p class="card-text mt-3">Secteur d'activité<br>Localisation<br>Projet disponible</p>
                        <a href="#" class="btn btn-primary btn-block">Consulter</a>
                    </div>
                </div>
              </div> -->

				<!-- partie freelance suite  ----------------------------->
				<div>
					<h1 class="mt-5 text-center" style="font-family: 'Oswald', serif;">Fini le métro, boulot dodo, tu peux travailler depuis ...</h1>
					<div class="text-center">
						<img src="./style/img/freelance.png" class="card-img-top w-75 rounded" alt="" />
						<div class="cta">
							<button onclick="window.location.href = './features/inscriptionInit.php';" type="button" class="btn btn-light1">Freelance? Je m'inscris 🚀</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- partie entreprise  ------------------------------------------>
	<div class="container mt-4">
		<h2 class="text-center mt-5 mb-5" style="font-family: 'Oswald', serif;">Ils cherchent des entreprises : trouvez le talent parfait pour propulser vos projets</h2>

		<div class="row g-3 mt-3 mb-5">
			<?php

			$statement = $bdd->query('SELECT freelance.id_freelance, freelance.freelance_name, freelance.freelance_job, freelance.freelance_country, freelance.freelance_tjm, freelance.freelance_experience, freelance.freelance_description, freelance.img_url FROM freelance ORDER BY id_freelance DESC LIMIT 4');

			while ($item = $statement->fetch()) {
				echo '<div class="col-12 col-md-6 col-lg-3">';
				echo '<div class="card img-thumbnail">';
				echo '<img class="img-photo" src="'.$item['img_url'].'" alt="Pas de photo disponible">';
				echo '<div class="card-body p-0 mt-3">';
				echo '<h5 class="card-title text-center">' . $item['freelance_job'] . ' </h5>';
				echo '<h5 class="card-title text-center">' . $item['freelance_name'] . '  <br> ➜ </h5>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}


			?>

			<!-- <div class="col-12 col-md-6 col-lg-3">
				<div class="card img-thumbnail">
					<img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="..." />
					<div class="card-body p-0 mt-1">
						<h5 class="card-title text-center">Pour les freelances</h5>
						<p class="card-text mt-3">Spécialité</p>
						<a href="#" class="btn btn-primary btn-block">Consulter</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<div class="card img-thumbnail ">
					<img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="...">
					<div class="card-body p-0 mt-1">
						<h5 class="card-title text-center">Pour les entreprises</h5>
						<p class="card-text mt-3">Spécialité</p>
						<a href="#" class="btn btn-primary btn-block">Consulter</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<div class="card img-thumbnail ">
					<img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="...">
					<div class="card-body p-0 mt-1">
						<h5 class="card-title text-center">Pour les freelances</h5>
						<p class="card-text mt-3">Spécialité</p>
						<a href="#" class="btn btn-primary btn-block">Consulter</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<div class="card img-thumbnail ">
					<img src="./img/freelanceprovisoire.jpg" class="card-img-top w-100" alt="...">
					<div class="card-body p-0 mt-1">
						<h5 class="card-title text-center">Pour les freelances</h5>
						<p class="card-text mt-3">Spécialité</p>
						<a href="#" class="btn btn-primary btn-block">Consulter</a>
					</div>
				</div>
			</div> -->


		</div>
		<div>
			<h1 class="mt-5 text-center" style="font-family: 'Oswald', serif;">Au revoir la paperasse, bonjour la tranquillité grâce à...</h1>
			<div class="text-center">
				<img src="./style/img/entreprise.png" class="card-img-top w-75 rounded" alt="" />
			</div>
			<div class="cta">
				<button onclick="window.location.href = './features/inscriptionInit.php';" type="button" class="btn btn-light">J'inscris mon entreprise 🚀</button>
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
							<li><a href="./features/entreprise/consultationProjet.php">Jobs</a></li>
							<li><a href="./features/freelance/consultationTalent.php">Talents</a></li>
							<li><a href="./features/connexion.php">Se connecter</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-3 item">
						<h3>About</h3>
						<ul>
							<li><a href="./team.php">Team</a></li>
							<li><a href="./princing.php">Prix</a></li>
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