<?php //page pour que le freelance crée son profil
$bdd = new PDO("mysql:host=localhost;dbname=nomatech;port=8889", "root", "root"); // connection à la base de donnée
// au lieu d'écrire la phrase  : $bdd = new PDO("mysql:host=localhost;dbname=nomatech","root","root");


?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Lien vers la page CSS -->
  <link rel="stylesheet" href="pageFreelanceFormProfil.css"> 
  <!-- Lien CDN pour utiliser Bootstrap 5.0.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Formulaire création de profil</title>
</head>
<body>
  <div class="container">

      <div class="form-body mt-5"> <!--Bootstrap : mt-5 sert à définir la marge supérieur -->
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Créer votre profil Freelance</h3>
                        <p>Avant de trouver la mission de vos rêves, merci de compléter votre profil</p>
                        <!-- formulaire en méthode GET : on récupère le résultat sur la page pageFreelanceFormProfilValidation.php-->
                        <form action="pageFreelanceFormProfilValidation.php"  method="post" class="requires-validation" enctype="multipart/form-data">
                           <div class="col-md-12 mt-5">
                              <label for="exampleFormControlInput1" class="form-label">Quel est votre prénom (ce prénom sera visible par les entreprises) ?</label>
                              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-12 mt-4">
                              <label for="exampleFormControlInput1" class="form-label">Quel est votre métier ? 💻</label>
                              <input type="text" name="job" class="form-control" id="exampleFormControlInput1" placeholder="développeur JS, développeur Front, sénior BI, junior intégrateur ..." required>
                            </div>

                            <div class="col-md-12 mt-4">
                              <label for="exampleFormControlInput1" class="form-label">Dans quel pays être-vous actuellement? 🌍</label>
                              <input type="text" class="form-control" name="country" id="exampleFormControlInput1" placeholder="Faites-nous réver!"required>
                            </div>

                            <div class="col-md-12 mt-4">
                              <label for="exampleFormControlInput1" class="form-label">Votre salaire journalier ?</label>
                              <input type="text" class="form-control" name="tjm" id="exampleFormControlInput1" placeholder="En euros, dollars? " required>
                            </div>

                  

                           <!-- <div class="col-md-12 mt-4">
                                <select class="form-select mt-3" required>
                                      <option selected disabled value="">Votre langue marternelle</option>
                                      <option value="jweb">200</option>
                                      <option value="sweb">Senior Web Developer</option>
                                      <option value="pmanager">Project Manager</option>
                                </select>
                           </div> -->

                           <div class="col-md-12 mt-4">
                              <label class="mb-3 mr-1" for="level1">Quel est votre niveau d'expérience ? </label>

                              <input type="radio" class="btn-check" name="level" value="0 à 2 ans" id="junior" required>
                              <label class="btn btn-sm btn-outline-secondary"  for="junior">0 à 2 ans</label>

                              <input type="radio" class="btn-check" name="level" value="2 à 7 ans" id="medium" required>
                              <label class="btn btn-sm btn-outline-secondary"  for="medium">2 à 7 ans</label>

                              <input type="radio" class="btn-check" name="level" value="7 ans et +"  id="senior"  required>
                              <label class="btn btn-sm btn-outline-secondary" for="senior">7 ans et +</label>

                            </div>

                            <div class="mb-4">
                              <label for="exampleFormControlTextarea1" class="form-label">Votre description 🖋️ </label>
                              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required ></textarea>
                            </div>

                            <label>Ajouter une photo de profil : </label>
                            <input type="file" name="image">

                            <div class="form-button mt-5">
                                <button id="submit" type="submit" class="btn btn-primary">Publier mon profil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</body>
</html>