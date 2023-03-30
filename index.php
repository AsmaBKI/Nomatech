<?php //page pour que le freelance crée son profil
require_once "./admin/databaseNomaTech.php"; // connection à la base de donnée
// au lieu d'écrire la phrase  : $db = new PDO("mysql:host=localhost;dbname=nomatech","root","root");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!--Police d'écriture importée de Google--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <!--Lien de Bootstrap--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Lien vers notre page CSS--> 
    <link rel="stylesheet" href="./css/stylePatisserie.css">    

    <title>Document</title>
</head>
<body>
    <div class="container site">
        <!-- <a href="./admin/index.php" class="btn btn-light"> Liste des produits </a> 
        <a href="./admin/insert.php" class="btn btn-light"> Ajouter un produit </a>  -->
        <h1 class="text-logo"> Liste des freelances disponibles </h1>
        
      <?php
    
        $statement = $bdd -> query('SELECT freelance.id_freelance, freelance.freelance_name, freelance.freelance_job, freelance.freelance_country, freelance.freelance_tjm, freelance.freelance_experience, freelance.freelance_description FROM freelance');

        echo '<div class="tab-content">';
        echo '<div class="tab-pane active". id="1"></div>';
        echo '<div class="row">';

        while ($item = $statement -> fetch())
        {
            echo '<div class="col-sm-6 col-md-4 mb-2">';
                    echo '<div class="img-thumbnail">';
                        //echo '<img class="img-photo" src="'.$item['image'].'" alt="Pas de photo disponible">';
                        echo '<h4>'. $item['freelance_job'].'</h4>';
                        echo '<p>'. $item['freelance_name'].'</p>';
                        //echo '<p>'. $item['freelance_description'] .'</p>';
                        echo '<p> Expérience : '. $item['freelance_experience'].'</p>';
                        echo '<div class="price"> TJM : '. $item['freelance_tjm'] .'€'. '</div>';
                        echo '<div class="caption1">';
                            
                            echo '<a href ="" class="btn btn-default btn-primary mt-3" role="button">Contacter '.$item['freelance_name'].'</span> </a>';
                        echo '</div>';
                   echo '</div>';
            echo '</div>';
        }
 
        echo '</div>';
        echo '</div> ';
        ?> 
    </div>
</body>
</html>