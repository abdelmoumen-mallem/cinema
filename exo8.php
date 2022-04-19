<?php

require_once("database&co.php");

    $aa=new Billet;
    $bb=new Rappro1;
    $cc=new Rappro2;

    $dd=new Recup;
    $ee=new Recup2;

    $ff=new Film;
    $gg=new Creneau;



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
   table{
       position: relative;
     
        text-align: center;
    }
    th{
        width:200px;
    }
    td{
        padding: 10px;
    }
    table tr{
        border-bottom: 1px solid black;

    }
  </style>
 
  <body>
  <?php
    require_once('nav.php');
   
    ?>
    <br><br><br><br>

    <h2 class=" text-info text-center">BACK OFFICE - RENSEIGNEMENTS</h2>

    <?php
if(isset($_GET["result"])){
  ?>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
    <div class="w-50 alert alert-success alert-dismissible fade show text-center" role="alert">
  <strong>Modications effectuées ! </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    </div>
  </div>

  <?php
}

if(isset($_GET["vide"])){
  ?>
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
    <div class="w-50 alert alert-warning alert-dismissible fade show text-center" role="alert">
  <strong>Pas de suppression récente ! </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    </div>
  </div>

  <?php
}

    ?>

   
    
    <br><br><br>
<center>
        <table>
      
        <thead>
            <th >NOM</th>
            <th >RESUME</th>
            <th >DUREE </th>
            <th >GENRE</th>
            <th >URL</th>
            <th >SEANCE</th>
            <th >MODIFIER</th>
            <th >SUPPRIMER</th>


           <!-- SELECT DISTINCT COUNT(num) as lolo FROM calendrier WHERE num IN (SELECT retour FROM sortie1)-->
        </thead>
        <tbody>

    <?php
for($i=0;$i<sizeof($ff->affiche());$i++){
   
?>

<tr>
    
    <td><?php echo $ff->affiche()[$i]["nom"] ;?></td>
    <td>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#col<?php echo $ff->affiche()[$i]["id"] ;?>">
  SYNOPSIS
    </button>
   </td>
    <td><?php echo $ff->affiche()[$i]["duree_minute"] ;?></td>
    <td><?php echo $ff->affiche()[$i]["genre"] ;?></td>
    <td><?php echo $ff->affiche()[$i]["url"] ;?></td>
    <td><?php for($o=0;$o<sizeof($gg->affiche4($ff->affiche()[$i]["id"]));$o++){
    echo $gg->affiche4($ff->affiche()[$i]["id"])[$o]["date1"]."<br>" ;
    }
    ?></td>
    <td><a href="update.php?update=<?php echo $ff->affiche()[$i]["id"];?>"
      class="btn btn-warning">MOFIFIER</a>
    </td>
    <td><a href="delete.php?delete=<?php echo $ff->affiche()[$i]["id"] ?>"
      class="btn btn-danger">SUPPRIMER</a>
    </td>
</tr>

<div class="modal fade" id="col<?php echo $ff->affiche()[$i]["id"] ;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-title " id="staticBackdropLabel">RESUME DU FILM : <?php echo $ff->affiche()[$i]["nom"] ;?></h5>
      </div>
      <div class="modal-body">
      <?php echo $ff->affiche()[$i]["synopsis"] ; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>



<?php

}
?>

</tbody>
    </table>

    <br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-6">
        <div>Rajouter un film.</div>
        <a href="insert.php"><i class="bi bi-plus-square" style="font-size: 4rem; color: cornflowerblue;"></i></a>
        </div>
        <div class="col-6">
        <div>Restauration.</div>
        <a href="delete2.php"><i class="bi bi-skip-backward-circle" style="font-size: 4rem; color: red;"></i></a>
        </div>

      </div>
    </div>
    </center>

   

   
    
  

   



   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
    <script>

    </script>
  </body>
  </html>