<?php
require_once("database&co.php");

$aa=new Recup;
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



  </style>
 
  <body>
  <?php
    require_once('nav.php');
   
    ?>
    <br><br><br><br>

    <h2 class=" text-info text-center">RECUPERATION DE VOS DE VOS BILLETS</h2>

    <br><br>
    <?php
if(isset($_GET["result"])){
  ?>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
    <div class="w-50 alert alert-warning alert-dismissible fade show text-center" role="alert">
  <strong>Pas de resultat! </strong> Veuillez entrer les renseignements à nouveau.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    </div>
  </div>

  <?php
}
    ?>

    <form class="row m-5 g-3" method="POST" action="exo7.php">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">PRENOM</label>
    <input type="text" class="form-control" id="validationCustom01" name="prenom"  required>
   
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">NOM</label>
    <input type="text" class="form-control" id="validationCustom02" name="nom"  required>
    
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">ADRESSE MAIL</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>
     
    </div>
  </div>


 
  
  
  
  <div class="col-12 text-center">
    <input class="btn btn-primary" type="submit" value="VALIDER" name="valid">
  </div>
</form>


    
   



   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  </body>
  </html>