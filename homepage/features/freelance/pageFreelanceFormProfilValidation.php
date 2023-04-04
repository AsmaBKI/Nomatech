<!-- page pour ajouter le profil freelance à la BDD -->
<?php
//se connection a une session utilisateur
session_start();

require_once "../../../admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $bdd = new PDO("mysql:host=localhost;dbname=nomatech","root","root");

//on récupére les valeurs du formulaire écrite dans 'name'
$name = $_POST['name'];
$job = $_POST['job'];
$country = $_POST['country'];
$tjm = $_POST['tjm'];
$experience = $_POST['level'];
$description = $_POST['description'];

//on récupère d'abord le nom de l'image
//$img_nom=$_FILES['image']['name'];

//définir un nom temporaire
//$tmp_nom=$_FILES['image']['tmp_nom'];

//récupère l'heure actuelle
//$time = time();

//on renomme l'image
//$nouveau_nom_image = $time.$img_nom;

//on délaplace l'image dans un dossier appellé 'image_bdd'
//$deplacer_img=move_uploaded_file($tmp_nom, "images_bdd/".$nouveau_nom_image);

//insére le nom de l'image dans la base de données
//$statement = $bdd -> query("INSERT INTO freelance(freelance.freelance_photo) VALUES ('$nouveau_nom_image');");

//on insére les informations données par l'utilisateur + une image déjà définie
$statement = $bdd->query("INSERT INTO freelance(freelance.freelance_name, freelance.freelance_job, freelance.freelance_country, freelance.freelance_tjm, freelance.freelance_experience, freelance.freelance_description) VALUES ('$name','$job','$country','$tjm','$experience','$description');");

?>

<!-- le HTML ----------------->
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Lien vers la page CSS -->
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
	<title>Ajouter le profil pageFreelanceFormProfil</title>
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
		<p> <?php echo 'Votre profil : a bien été ajouté au site. Merci!
              Récapitulatif :

              <table class="table table-striped mt-5">

              <tbody>
                <tr>
                  <th scope="row">Prénom</th>
                  <td> ' . $name . '</td>
                </tr>
                <tr>
                  <th scope="row">Métier recherché</th>
                  <td>' . $job . '</td>
                </tr>
                <tr>
                  <th scope="row">Pays</th>
                  <td>' . $country . '</td>
                </tr>
                <tr>
                  <th scope="row"> Taux journalier souhaité</th>
                  <td>' . $tjm . '</td>
                </tr>
                <tr>
                  <th scope="row"> Expérience</th>
                  <td>' . $experience . '</td>
                </tr>
                <tr>
                  <th scope="row"> Description</th>
                  <td>' . $description . '</td>
                </tr>
              </tbody>
            </table>'; ?> </p>
		<!-- <p> <img class="w-25" src="https://images.unsplash.com/photo-1571942948809-74637bfc59b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGJha2VyaWV8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"> </p> -->
		<a href="../freelance/pageFreelanceFormProfil.php" class="btn btn-light mt-5"> Revenir à la page précédente </a>
		<a href="index.php" class="btn btn-light mt-5"> Liste des job </a>
	</div>
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