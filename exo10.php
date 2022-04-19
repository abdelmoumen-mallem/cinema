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



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  </head>
 
  <body>
    <?php
    require_once('nav.php');
    ?>

      <br><br><br><br><br><br>
      <h2 class="text-center text-info">ACTUELLEMENT DANS NOS SALLES</h2>

        
        
<br><br><br>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <div id="container">
            <img src="topgun2.jpg"  class="d-block  w-100" alt="...">
            </div>
            <div class="carousel-caption ">
              <h5>TOP GUN 2</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="batman.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>THE BATMAN</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="drstrange.jpg"  class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>DR STRANGE 2</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">RETOUR</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">SUIVANT</span>
        </button>
      </div>

      <br><br><br>
      <h2 class="text-center text-warning">LES TARIFS</h2>
      <br><br><br>

      <div class="container">
        <div class="row">
          <div class="col-md p-4 d-flex justify-content-center ">
            <div class="carte">
<div class="box text-center">
  <i class="bi bi-person-workspace" style="font-size: 2rem; color: cornflowerblue;"></i>
</div>
<div class="box1 text-center">PLEIN  TARIF</div>
<div class="box2 text-center">9€20</div>


            </div>
          </div>
          <div class="col-md p-4 d-flex justify-content-center ">
            <div class="carte">
<div class="box text-center">
  <i class="bi bi-journal-bookmark" style="font-size: 2rem; color: cornflowerblue;"></i>

</div>
<div class="box1 text-center">ETUDIANT</div>
<div class="box2 text-center">7€60</div>


            </div>
          </div>
          <div class="col-md p-4 d-flex justify-content-center">
            <div class="carte">
<div class="box text-center">
  <i class="bi bi-person-dash" style="font-size: 2rem; color: cornflowerblue;"></i>
</div>
<div class="box1 text-center">- DE 14 ANS</div>
<div class="box2 text-center">5€90</div>



    </div>
          </div>
        </div>
      </div>

      <br><br><br>
      <h2 id="ancre" class="text-center text-success ">LES SEANCES</h2>
      <br><br><br>

      <div class="container">
        <div class="row">   
<?php

require_once("database&co.php");
$aa=new Film;
$b=new Creneau;

/*
for($i=0;$i<sizeof($aa->affiche());$i++){
    echo
    $aa->affiche()[$i]["nom"]."<br>";
}
*/

for($i=0;$i<sizeof($aa->affiche());$i++){
   ?>
  
  <div class="col-xl-4 col-md-12 p-4 d-flex justify-content-center ">
            <div class="carte1">

<div class="boxx1 text-center d-flex justify-content-center align-items-center p-4 "><?php  echo
    $aa->affiche()[$i]["nom"];?></div>
 

<div class="boxx2 text-center d-flex justify-content-center align-items-center"><?php  echo
    $aa->affiche()[$i]["synopsis"];?></div>

<div class="boxx3 text-center d-flex justify-content-end align-items-center "><?php  echo
    $aa->affiche()[$i]["duree_minute"]." MIN";?></div>

<div class="boxx4 text-center d-flex justify-content-start align-items-center"><?php  echo
    $aa->affiche()[$i]["genre"];?></div>

<div class="boxx5 text-center d-flex justify-content-center align-items-center cBtnYouTube btn " data-bs-toggle="modal" data-bs-target="#oModalYouTube" data-url="https://www.youtube.com/embed/<?php echo $aa->affiche()[$i]["url"];  ?>?html5=1" data-titre="<?php echo $aa->affiche()[$i]["nom"]; ?>">
<button type="button" class="btn btn-success">BANDE ANNONCE</button>

</div>

<div class="boxx6 text-center d-flex justify-content-center align-items-center ">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#static<?php echo $aa->affiche()[$i]["id"] ?>">RESERVATION</button>

</div>
 

            </div>
          </div>

          <!-- Modal -->
<div class="modal fade" id="static<?php echo $aa->affiche()[$i]["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">CHOIX DE LA SEANCE DU FILM : <?php echo $aa->affiche()[$i]["nom"] ;?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container">
  <div class="row">
      <?php 

      for($o=0;$o<sizeof($b->affiche4($aa->affiche()[$i]["id"]));$o++){

        ?>

    <div class="col">
      <a href="exo5.php?id=<?php echo $b->affiche4($aa->affiche()[$i]["id"])[$o]["id"];?>"><button type="button" class="btn btn-success"><?php echo $b->affiche4($aa->affiche()[$i]["id"])[$o]["date1"]."<br>"; ?></button></a>
    </div>
  
       <?php

       // echo $b->affiche4($aa->affiche()[$i]["id"])[$o]["date"]."<br>";
      
      }
      
      ?>
      </div>
</div>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
   <?php

   
}


?> 

</div>
          </div> 

    <div class="modal fade" id="oModalYouTube" tabindex="-1" aria-labelledby="oModalYouTubeTitre" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content rounded-0">
          <div class="modal-header rounded-0 border-0" style="color:#fff;background-color:#000">
            <p id="oModalYouTubeTitre" class="modal-title lh-1"></p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body p-0">
            <div class="ratio ratio-16x9">
              <iframe id="oVideoYouTubeiFrame" src="" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Button trigger modal -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="script2.js"></script>
  </body>
</html>