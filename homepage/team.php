<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./style/style.css" />
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
	<!------------------ team ------------------>
	<div class="body-part2" style="background-color: #d8c7e1; border-radius: 10px;">
		<div class="container">
			<div class="bandeauteam col-12">
				<div class="row g-3 mb-5 mt-4">
					<div class="paragraphetext col-sm-6 align-self-center">
						<h1 class="text-center" style="font-family: 'Oswald', serif;">
							Des opportunités pour tous!
						</h1>
						<!-- <h2 class="text-center" style="font-family: 'Alkatra', serif;">
                Vous allez adorer cette nouvelle façon de collaborer !</h2> -->
						<br>
						<h2 class="text-center" style="font-family: 'Oswald', serif;">
							L'endroit où vous vous trouvez ne devrait pas déterminer ce que vous faites 🌍...
						</h2>
					</div>
					<div class="paragrapheimg col-sm-6 mt-5 mb-5 ">
						<img class="" style="width:100%; border-radius:10px" src="./style/img/team.png">
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="col-12">
			<div class="row g-3 mb-5 mt-4">
				<div class="col-xl-3 col-sm-6 mt-2 text-center">
					<img style="height:280px;" src="./style/img/Julien.png" class="w-75 rounded">
					<p>
					<h4 style="font-family: 'Oswald', serif;">Co-Founder </h4> <br> CEO </p>
				</div>

				<div class="col-xl-3 col-sm-6 mt-2 text-center">
					<img style="height:280px;" src="./style/img/Andy.jpeg" class="w-75 rounded">
					<p>
					<h4 style="font-family: 'Oswald', serif;">Co-Founder </h4> <br> President </p>
				</div>
				<div class="col-xl-3 col-sm-6 mt-2 text-center">
					<img style="height:280px;" src="./style/img/Aurelie.png" class="w-75 rounded">
					<p>
					<h4 style="font-family: 'Oswald', serif;">Co-Founder </h4> <br> CFO </p>

				</div>
				<div class="col-xl-3 col-sm-6 mt-2 text-center">
					<img style="height:280px;" src="./style/img/Asma.png" class="w-75 rounded">
					<p>
					<h4 style="font-family: 'Oswald', serif;">Co-Founder </h4> <br> CTO </p>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- Contact -->

    <div class="container">
            <div class="col-12">
                <div class="row g-3 mb-5 mt-5">
                    <div class="form col-7 mt-5">
                        <form method="" action="./contact.php" align="center" >
                            <div>
                                <label class="form-label" for="email" style="font-family: 'Oswald', serif;">Votre e-mail</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="monadresse@mail.com" required>
                                <br/>
                            </div>

                            <div>
                                <label class="form-label" for="message" style="font-family: 'Oswald', serif;">Votre message </label>
                                 <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Bonjour, je vous contacte car ..."></textarea>
                                <br/>
                            </div>

                            <div>
                                <button type="submit" name ="envoi" class="btn btn-primary" style="font-family: 'Oswald', serif;" onclick="window.location.href = './contact.php';"> ENVOYER </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-5 text-center">
                        <img src="./style/img/enveloppe.png" class="w-75 rounded"> 
                    </div >
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