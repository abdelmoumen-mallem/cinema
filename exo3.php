<?php

require_once("database&co.php");

    $aa=new Billet;
    $bb=new Rappro1;
    $cc=new Rappro2;

if(isset($_GET['id'])){

    $id=$_GET['id'];
}
//echo $aa->afficheUnique(base64_decode($id))["qrcode"];
$qr1=$aa->afficheUnique1(base64_decode($id))["qrcode"];

$qr="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=$qr1";

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

    <h2 class=" text-info text-center">RECAPITULATIF DE VOTRE RESERVATION</h2>

  
<br>
    <br>

    <div class="container d-flex justify-content-center">
        <div class="row ">
            <div class="col-12">
                <div class="ticket">
<div class="div1 text-center d-flex justify-content-center align-items-center" ><?php echo $aa->afficheUnique1(base64_decode($id))["nom"];  ?> </div>
<div class="div2 text-center d-flex justify-content-center align-items-center"> <?php echo $aa->afficheUnique1(base64_decode($id))["d"];  ?> </div>
<div class="div3 text-center d-flex justify-content-center align-items-center text-primary">FILM </div>
<div class="div4 text-center d-flex justify-content-center align-items-center text-primary">SEANCE </div>
<div class="div5 text-center d-flex justify-content-center align-items-center text-primary"> PLACES</div>
<div class="div6 text-center d-flex justify-content-center align-items-center"><?php echo $bb->afficheUnique2($aa->afficheUnique1(base64_decode($id))["id_film"])["f"];?></div>
<div class="div7 text-center d-flex justify-content-center align-items-center"><?php echo $cc->afficheUnique3($aa->afficheUnique1(base64_decode($id))["id_seance"])["s"];?> </div>
<div class="div8 text-center d-flex justify-content-center align-items-center"><?php echo $aa->afficheUnique1(base64_decode($id))["numero"];  ?> </div>
<div class="div9 text-center d-flex justify-content-center align-items-center text-primary">NORMAL </div>
<div class="div10 text-center d-flex justify-content-center align-items-center text-primary">ETUDIANT </div>
<div class="div11 text-center d-flex justify-content-center align-items-center text-primary">-14 ANS </div>
<div class="div12 text-center d-flex justify-content-center align-items-center"><?php echo $aa->afficheUnique1(base64_decode($id))["prix1"];  ?> </div>
<div class="div13 text-center d-flex justify-content-center align-items-center"> <?php echo $aa->afficheUnique1(base64_decode($id))["prix2"];  ?></div>
<div class="div14 text-center d-flex justify-content-center align-items-center"><?php echo $aa->afficheUnique1(base64_decode($id))["prix3"];  ?> </div>
<div class="div15 text-center d-flex justify-content-center align-items-center text-primary"></div>
<div class="div16 text-center d-flex justify-content-center align-items-center"> </div>
<div class="div17  text-center d-flex justify-content-center align-items-center text-primary">TARIF </div>
<div class="div18 text-center d-flex justify-content-center align-items-center"> </div>
<div class="div19 text-center d-flex justify-content-center align-items-start"><?php echo $aa->afficheUnique1(base64_decode($id))["tarif"]." €";  ?> </div>
<div class="div20"> </div>
<div class="div21 text-center d-flex justify-content-center align-items-end">
<img src="<?php echo $qr  ?>" alt="">    
</div>
<!--https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=Hello%20world-->


                </div>
            </div>
        </div>
    </div>
   



   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  </body>
  </html>