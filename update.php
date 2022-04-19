<?php

require_once("database&co.php");

    $aa=new Billet;
    $bb=new Rappro1;
    $cc=new Rappro2;

    $dd=new Recup;
    $ee=new Recup2;

    $ff=new Film;
    $gg=new Creneau;

    $hh=new Film2;
    $ii=new UpdateFilm;

    $jj=new UpdateSeance;
    $kk=new Recup3;



if(isset($_POST["valid1"])){
$replace= str_replace("'","''",$_POST["synopsis"]);
$ii->updateFilm($_POST["film"],$replace,$_POST["duree"],$_POST["genre"],$_POST["url"],$_GET["update"]);

for($o=0;$o<sizeof($gg->affiche4($hh->afficheUnique($_GET["update"])["id"]));$o++){
   $a1=$gg->affiche4($hh->afficheUnique($_GET["update"])["id"])[$o]["id"];
   $jj->updateSeance($_POST["seance"][$o],$a1);
 }
 header('Location:exo8.php?result');

}



//}






?>

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

    <h2 class=" text-info text-center">BACK OFFICE - MODIFICATION</h2>

   
    
    <br>
<center>
<form action="" method="POST">

<label for="film">1-CHOIX DU FILM:</label><br>
<input class="text-center" type="text" name="film" id="film" value="<?php echo strtoupper($hh->afficheUnique($_GET["update"])["nom"]) ; ?>">  
<br><br>



<label for="synopsis">2-CHOIX DU RESUME:</label><br>
<textarea name="synopsis" id="synopsis" cols="40" rows="5" ><?php echo $hh->afficheUnique($_GET["update"])["synopsis"]; ?></textarea> 
   
<br><br>

<label for="duree">3-CHOIX DE LA DUREE(en minute):</label><br>
<input class="text-center" type="text" name="duree" id="duree" value="<?php echo $hh->afficheUnique($_GET["update"])["duree_minute"]; ?>">  
<br><br>

<label for="genre">4-CHOIX DU GENRE:</label><br>
<input class="text-center" type="text" name="genre" id="genre" value="<?php echo strtoupper($hh->afficheUnique($_GET["update"])["genre"]); ?>">  
<br><br>

<label for="url">5-CHOIX DE L'URL YOUTUBE(passage en bleu uniquement, exemple: https://youtu.be/ <mark><span class="text-primary taille">w_BoTCCV35Y</span></mark> ):</label><br>
<input class="text-center" type="text" name="url" id="url" value="<?php echo $hh->afficheUnique($_GET["update"])["url"]; ?>">  
<br><br>

<label for="seance">6-CHOIX DES SEANCES:</label><br>
<?php
for($o=0;$o<sizeof($gg->affiche4($hh->afficheUnique($_GET["update"])["id"]));$o++){
   // echo $gg->affiche4($ff->affiche()[$i]["id"])[$o]["date1"]."<br>" ;
?>
<a href="update.php?<?php echo $gg->affiche4($hh->afficheUnique($_GET["update"])["id"])[$o]["id"]; ?>"><input class="text-center" type="datetime-local" name="seance[]" id="seance" value="<?php echo $gg->affiche4($hh->afficheUnique($_GET["update"])["id"])[$o]["datation"]; ?>"></a><br><br>
<?php
    }
?>


<input type="submit" name="valid1" class="btn btn-primary" value="VALIDER LA MODIFICATION">

 
</form>
</center>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  </body>
  </html>