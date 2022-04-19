<?php

require_once("database&co.php");

    $aa=new Billet;
    $bb=new Rappro1;
    $cc=new Rappro2;

    $dd=new Recup;
    $ee=new Recup2;

    if($ee->afficheUnique5($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])["count"]==0){
header('Location:exo4.php?result');
    }


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

    <h2 class=" text-info text-center">HISTORIQUE DE VOS RESERVATIONS</h2>

  
<br>
    <br>

    <div class="container">
        <div class="row ">

        <?php
        if(isset($_POST["valid"])){
            if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])){
                if($ee->afficheUnique5($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])["count"]>0){
                for($i=0;$i<sizeof($dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"]));$i++){

                    ?>

<div class="col-12 d-flex justify-content-center mb-5">
                <div class="ticket">
<div class="div1 text-center d-flex justify-content-center align-items-center" ><?php echo $dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["nom"];  ?> </div>
<div class="div2 text-center d-flex justify-content-center align-items-center"> <?php echo $dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["d"];  ?> </div>
<div class="div3 text-center d-flex justify-content-center align-items-center text-primary">FILM </div>
<div class="div4 text-center d-flex justify-content-center align-items-center text-primary">SEANCE </div>
<div class="div5 text-center d-flex justify-content-center align-items-center text-primary"> PLACES</div>
<div class="div6 text-center d-flex justify-content-center align-items-center"><?php echo $bb->afficheUnique2($dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["id_film"])["f"];?></div>
<div class="div7 text-center d-flex justify-content-center align-items-center"><?php echo $cc->afficheUnique3($dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["id_seance"])["s"];?> </div>
<div class="div8 text-center d-flex justify-content-center align-items-center"><?php echo str_replace(" ",",",$dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["numero"]);  ?> </div>
<div class="div9 text-center d-flex justify-content-center align-items-center text-primary">NORMAL </div>
<div class="div10 text-center d-flex justify-content-center align-items-center text-primary">ETUDIANT </div>
<div class="div11 text-center d-flex justify-content-center align-items-center text-primary">-14 ANS </div>
<div class="div12 text-center d-flex justify-content-center align-items-center"><?php echo $dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["prix1"];  ?> </div>
<div class="div13 text-center d-flex justify-content-center align-items-center"> <?php echo $dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["prix2"];  ?></div>
<div class="div14 text-center d-flex justify-content-center align-items-center"><?php echo $dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["prix3"];  ?> </div>
<div class="div15 text-center d-flex justify-content-center align-items-center text-primary"></div>
<div class="div16 text-center d-flex justify-content-center align-items-center"> </div>
<div class="div17  text-center d-flex justify-content-center align-items-center text-primary">TARIF </div>
<div class="div18 text-center d-flex justify-content-center align-items-center"> </div>
<div class="div19 text-center d-flex justify-content-center align-items-start"><?php echo $dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["tarif"]." €";  ?> </div>
<div class="div20"> </div>
<div class="div21 text-center d-flex justify-content-center align-items-end">
<img src="<?php echo 'https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=$dd->afficheUnique4($_POST["nom"]." ".$_POST["prenom"],$_POST["email"])[$i]["qrcode"]'; ?>" alt="">    
</div>


                </div>
            </div>

           

                    <?php

                }
                
                }
                   
            }
        }

       ?>

          


        </div>
    </div>
   



   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  </body>
  </html>