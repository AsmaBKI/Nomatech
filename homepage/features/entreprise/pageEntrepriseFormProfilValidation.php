<!-- page pour ajouter le profil freelance à la BDD -->
<?php
session_start();
require_once "../../../admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $bdd = new PDO("mysql:host=localhost;dbname=nomatech","root","root");

//on récupére les valeurs du formulaire écrite dans 'name'
$name = $_POST['name'];
$activity = $_POST['activity'];
$country = $_POST['country'];
$siret = $_POST['siret'];
$namerp = $_POST['namerp'];
$postrp = $_POST['postrp'];
$description = $_POST['description'];

//on insére les informations données par l'utilisateur + une image déjà définie
$statement = $bdd->query("INSERT INTO entreprise(entreprise.name, entreprise.activity, entreprise.country, entreprise.siret, entreprise.namerp, entreprise.postrp, entreprise.description) VALUES
 ('$name','$activity','$country','$siret','$namerp','$postrp','$description');");

?>

<!-- le HTML ----------------->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../../style/style.css" />
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
				<span><a href="../../pageAccueil.php" style="font-family: 'Alkatra', serif; font-size: 40px; color: #240085; text-decoration:none">Noma'tech</a></span>
			</div>
		</div>

		<div class="bloc-container2">
			<a href="../entreprise/consultationProjet.php">Jobs</a>

			<a href="../freelance/consultationTalent.php">Talents</a>

			<a href="../connextion.php">Se connecter</a>

			<button class="inscription" onclick="window.location.href = '../inscriptionInit.php';">
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
				<span class="ml-2" style="font-family: 'Alkatra', serif; font-size: 30px; color: #240085"><a href="../../pageAccueil.php">Noma'tech</a></span>
			</div>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="../entreprise/consultationProjet.php">Jobs</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="../freelance/consultationTalent.php">Talents</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="../connextion.php">Se connecter</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="../inscriptionInit.php">S'inscrire gratuitement</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="../../team.php">A propos de</a>
			</span>
		</div>
		<div class="bloc-menu">
			<span class="nav-menu-item">
				<a href="#">Contact</a>
			</span>
		</div>
		<div class="bloc-menu">
			<div class="logo-contact">
				<a href="#"><img src="../../style/img/Mail contact.png" alt="Logo Contact" /></a>
			</div>
		</div>
	</nav>

	<div class="container mt-5 ">
		<p> <?php echo 'Votre profil entreprise a bien été ajouté au site. Merci!
      Récapitulatif :

      <table class="table table-striped mt-5">

      <tbody>
        <tr>
          <th scope="row">Nom entreprise</th>
          <td> ' . $name . '</td>
        </tr>
        <tr>
          <th scope="row">Secteur dactivité</th>
          <td>' . $activity . '</td>
        </tr>
        <tr>
          <th scope="row">Pays</th>
          <td>' . $country . '</td>
        </tr>
        <tr>
          <th scope="row"> N°SIRET </th>
          <td>' . $siret . '</td>
        </tr>
        <tr>
          <th scope="row"> Nom du représentant</th>
          <td>' . $namerp . '</td>
        </tr>
        <tr>
          <th scope="row"> Poste du répresentant </th>
          <td>' . $postrp . '</td>
        </tr>
        <tr>
          <th scope="row"> Description</th>
          <td>' . $description . '</td>
        </tr>
      </tbody>
      </table>'; ?> </p>
		<!-- <p> <img class="w-25" src="https://images.unsplash.com/photo-1571942948809-74637bfc59b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGJha2VyaWV8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"> </p> -->
		<a href="../entreprise/pageEntrepriseFormProfil.php" class="btn btn-primary mt-5" style="font-family: 'Oswald', serif;"> Revenir à la page précédente </a>
		<a href="../entreprise/pageEntrepriseFormAnnonce.php" class="btn btn-primary mt-5" style="font-family: 'Oswald', serif;"> Déposer une annonce </a>
	</div>
	<br><br><br>
	<!------------------ FOOTER ------------------>
	<div class="footer-dark mt-5">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3 item">
						<h3>Service</h3>
						<ul>
							<li><a href="../entreprise/consultationProjet.php">Jobs</a></li>
							<li><a href="../freelance/consultationTalent.php">Talents</a></li>
							<li><a href="../connexion.php">Se connecter</a></li>
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