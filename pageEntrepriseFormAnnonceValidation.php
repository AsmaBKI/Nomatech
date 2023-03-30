<!-- page pour ajouter le profil freelance à la BDD -->
<?php 
require_once "./admin/databaseNomaTech.php";// connection à la base de donnée
// au lieu d'écrire la phrase  : $bdd = new PDO("mysql:host=localhost;dbname=nomatech","root","root");

 //on récupére les valeurs du formulaire écrite dans 'name'
  $name = $_POST['project'];
  $description = $_POST['description'];
  $budget = $_POST['budget'];
  $date = $_POST['date'];
  $dateinit = $_POST['dateinit'];
  $reponse = $_POST['reponse'];

 
 //on insére les informations données par l'utilisateur + une image déjà définie
 $statement = $bdd -> query("INSERT INTO projet(projet.project, projet.description, projet.budget, projet.date, projet.dateinit, projet.reponse) VALUES ('$name','$description','$budget','$date','$dateinit','$reponse');");

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
  <title>Ajouter une annonce de projet</title>
</head>
      <body>
          <div class="container mt-5 ">
              <p> <?php   echo 'Votre annonce a bien été ajouté au site. Merci! 
              Récapitulatif : 
                
              <table class="table table-striped mt-5">
              
              <tbody>
                <tr>
                  <th scope="row">Nom du projet</th>
                  <td> '.$name.'</td>
                </tr>
                <tr>
                  <th scope="row">Description</th>
                  <td>'.$description.'</td>
                </tr>
                <tr>
                  <th scope="row">Budget journalier</th>
                  <td>'.$budget.'</td>
                </tr>
                <tr>
                  <th scope="row">Date limite pour les candidatures</th>
                  <td>'.$date.'</td>
                </tr>
                <tr>
                  <th scope="row">Date de début du projet</th>
                  <td>'.$dateinit.'</td>
                </tr>
                <tr>
                  <th scope="row"> Réponse sous combien de jour après la date limite des candidatures ?</th>
                  <td>'.$reponse.'</td>
                </tr>


              </tbody>
            </table>' ; ?> </p>
              <!-- <p> <img class="w-25" src="https://images.unsplash.com/photo-1571942948809-74637bfc59b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGJha2VyaWV8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"> </p> -->
              <a href="pageEntrepriseFormAnnonce.php" class="btn btn-light mt-5"> Revenir à la page précédente </a>
          </div>
      </body>
</html>
