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

    <h2 class=" text-info text-center">BACK OFFICE - ENREGISTREMENT - ETAPE 2</h2>

    <?php
    if(isset($_POST["seance"])){

    
      for($i=0;$i<sizeof($_POST["seance"]);$i++){
        if($_POST["seance"][$i] ==""){
  ?>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
    <div class="w-50 alert alert-warning alert-dismissible fade show text-center" role="alert">
  <strong>Rentrez une date ! </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    </div>
  </div>

  <?php
}
      }
    }

?>

   
    
   
<center>
<form action="" method="POST">


<br><br>

<div class="container">
    <div class="row">
        <div class="col-6">
        <button type="button" id="btn" class="btn btn-success"><span><i class="bi bi-plus-square"></i></span> RAJOUTER UNE SEANCE</button><br><br>
        </div>

        <div class="col-6">
        <button type="button" id="btn2" class="btn btn-danger"><span><i class="bi bi-x-circle"></i></span> EFFACER DERENIERE SEANCE</button><br><br>
        </div>
    </div>
</div>
<div class="ajout">
<input class="text-center popo" type="datetime-local" name="seance[]" id="seance" ><br><br>
</div>


<input type="submit" name="valid1" class="btn btn-primary" value="ENREGISTRER">

<?php
require_once("database&co.php");

$aa=new Recup3;
$bb=new InserSeance;


if(isset($_POST["valid1"])){
    for($i=0;$i<sizeof($_POST["seance"]);$i++){
      if($_POST["seance"][$i]!==""){
        $bb->inser4($aa->afficheUnique($_GET["id"])["id"],$_POST["seance"][$i]);
       header("Location:exo8.php?result");
    }
   
//echo $_POST["seance"][$i]."<br>";
    }
   // echo $aa->afficheUnique($_GET["id"])["id"];

}




?>

 
</form>
</center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
    <script>
        $(document).ready(function(){
 
  $("#btn").click(function(){
    $(".ajout").append('<div class="ajout2"><input class="text-center" type="datetime-local" name="seance[]" id="seance"><br><br></div>');
  });

  $("#btn2").click(function(){
    $(".ajout2").last().remove();


  });

});
    </script>
  </body>
  </html>