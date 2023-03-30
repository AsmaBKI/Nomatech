<!-- page pour ajouter le profil freelance à la BDD -->
<?php 
require_once "./admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $bdd = new PDO("mysql:host=localhost;dbname=nomatech","root","root");

 //on récupére les valeurs du formulaire écrite dans 'name'
  $name = $_POST['name'];
  $job = $_POST['job'];
  $country = $_POST['country'];
  $tjm = $_POST['tjm'];
  $experience= $_POST['level'];
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
 $statement = $bdd -> query("INSERT INTO freelance(freelance.freelance_name, freelance.freelance_job, freelance.freelance_country, freelance.freelance_tjm, freelance.freelance_experience, freelance.freelance_description) VALUES ('$name','$job','$country','$tjm','$experience','$description');");

?>

<!-- le HTML ----------------->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Lien vers la page CSS -->
  <link rel="stylesheet" href="pageFreelanceFormProfil.css"> 
  <!-- Lien CDN pour utiliser Bootstrap 5.0.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Ajouter le profil pageFreelanceFormProfil</title>
</head>
      <body>
          <div class="container mt-5 ">
              <p> <?php   echo 'Votre profil : a bien été ajouté au site. Merci! 
              Récapitulatif : 
                
              <table class="table table-striped mt-5">
              
              <tbody>
                <tr>
                  <th scope="row">Prénom</th>
                  <td> '.$name.'</td>
                </tr>
                <tr>
                  <th scope="row">Métier recherché</th>
                  <td>'.$job.'</td>
                </tr>
                <tr>
                  <th scope="row">Pays</th>
                  <td>'.$country.'</td>
                </tr>
                <tr>
                  <th scope="row"> Taux journalier souhaité</th>
                  <td>'.$tjm.'</td>
                </tr>
                <tr>
                  <th scope="row"> Expérience</th>
                  <td>'.$experience.'</td>
                </tr>
                <tr>
                  <th scope="row"> Description</th>
                  <td>'.$description.'</td>
                </tr>
              </tbody>
            </table>' ; ?> </p>
              <!-- <p> <img class="w-25" src="https://images.unsplash.com/photo-1571942948809-74637bfc59b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGJha2VyaWV8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"> </p> -->
              <a href="pageFreelanceFormProfil.php" class="btn btn-light mt-5"> Revenir à la page précédente </a>
              <a href="index.php" class="btn btn-light mt-5"> Liste des job </a>
          </div>
      </body>
</html>
