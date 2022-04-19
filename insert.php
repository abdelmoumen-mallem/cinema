<!doctype html>
<html lang="fr-CA">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ALLO CINOCHE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  </head>
  <style>
      .taille{
          font-size: 25px;
      }
  
  </style>
 
  <body>
  <?php
    require_once('nav.php');
   
    ?>
    <br><br><br><br>

    <h2 class=" text-info text-center">BACK OFFICE - ENREGISTREMENT - ETAPE 1</h2>

   
    
    <br>
<center>
<form action="" method="POST">

<label for="film">1-CHOIX DU FILM:</label><br>
<input class="text-center" type="text" name="film" id="film"  required>  
<br><br>



<label for="synopsis">2-CHOIX DU RESUME:</label><br>
<textarea name="synopsis" id="synopsis" cols="40" rows="5" required ></textarea> 
   
<br><br>

<label for="duree">3-CHOIX DE LA DUREE(en minute):</label><br>
<input class="text-center" type="number" name="duree" id="duree"  required>  
<br><br>

<label for="genre">4-CHOIX DU GENRE:</label><br>
<input class="text-center" type="text" name="genre" id="genre" required >  
<br><br>

<label for="url">5-CHOIX DE L'URL YOUTUBE(passage en bleu uniquement, exemple: https://youtu.be/ <mark><span class="text-primary taille">w_BoTCCV35Y</span></mark> ):</label><br>
<input class="text-center" type="text" name="url" id="url" required>  
<br><br>

<!--<label for="seance">6-CHOIX DES SEANCES:</label><br>

<input class="text-center" type="datetime-local" name="seance[]" id="seance" ><br><br>-->



<input type="submit" name="valid1" class="btn btn-primary" value="ENREGISTRER">

 
</form>
</center>

<?php
require_once("database&co.php");

$aa=new InserFilm;

/*
   "nom"=>strtoupper($_POST["film"]),
              "synopsis"=>$a,
            "duree_minute"=>$_POST["duree"],
            "genre"=>strtoupper($_POST["genre"]),
            "url"=>$_POST["url"]
*/



if(isset($_POST["valid1"])){
   $replace= str_replace("'","''",$_POST["synopsis"]);
$a=$_POST["film"];
   $aa->inser3($a,$replace,$_POST["duree"],$_POST["genre"],$_POST["url"]);
    header("Location:insert2.php?id=$a");
 }
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  </body>
  </html>