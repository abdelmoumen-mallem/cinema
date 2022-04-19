<?php





require_once("database&co.php");
$aa=new Film2;
$bb=new Seance;
$b=new CreneauB;
$cc=new Place;
$jj=new InsertPlace;



if(isset($_POST["valid"])){
    $nom=$_POST["nom"]." ".$_POST["prenom"];
    $nom1=base64_encode($nom);
    header("Location:exo3.php?id=$nom1");
}



if(isset($_GET['id'])){

    $id=$_GET['id'];
}
else{
    header('Location:exo10.php');
}



     function compare($number){
        $id=$_GET['id'];
        $cc=new Place;
        $b=new CreneauB;
      






        $ab=[];
        for(
           // $i=0;$i<sizeof($cc->affiche3($b->affiche4($id)[0]["id"]));$i++){
           //$ab[]=$cc->affiche3($b->affiche4($id)[0]["id"])[$i]["numero"];
           $ii=0;$ii<sizeof($cc->affiche3($b->affiche4($id)[0]["id"]));$ii++){
            for($oo=0;$oo<sizeof(explode(" ",$cc->affiche3($b->affiche4($id)[0]["id"])[$ii]["numero"]));$oo++){
                $ab[]= explode(" ",$cc->affiche3($b->affiche4($id)[0]["id"])[$ii]["numero"])[$oo];
            }
    }
        if(in_array($number,$ab)){
            echo "  disabled ";
          }
          else{
              echo "";
          }
        
     }
     /*
     if(in_array(11, $ab)){
        echo " checked disabled ";
      }
      else{
          echo "";
      }
     */
   
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
<br><br><br><br><br><br>
<h2 class="text-warning text-center">RESERVATION DE VOTRE FILM</h2>



<a href="exo10.php#ancre"><button type="button" class="btn btn-primary m-4">CHOISIR UN AUTRE FILM</button></a>


    <br><br><br>

<u><h3 class="text-center">RESERVATION DU FILM : <span class="text-primary"><?php  echo $aa->afficheUnique($b->affiche4($id)[0]["id_film"])["nom"];  ?></span></h3></u>
<br>
<u><h3 class="text-center">HORAIRE CHOISIE : <span class="text-primary"><?php  echo $b->affiche4($id)[0]["date1"] ;  ?></span></h3></u>
<br><br>
<h3 class="text-center nombre2 text-warning"></h3>

<form action="" method="POST">
<div class="container">
  <div class="row">
<?php
/*
echo $b->affiche4($id)[0]["date1"] ;
echo "<br>";
echo "id film : ".$b->affiche4($id)[0]["id_film"];
echo "<br>";
echo $aa->afficheUnique($b->affiche4($id)[0]["id_film"])["nom"];
echo "<br>";
echo "id seance : ".$b->affiche4($id)[0]["id"];
*/







//var_dump(explode(" ",$dd->affiche5()[1]["numero"]));
  





 
/*
for($i=0;$i<sizeof($bb->affiche($id));$i++){
      
     ?>   

  <div class="col-6 text-center">
      <?php echo $bb->affiche2($id)[$i]["date1"]."<br>"?>
      <input type="radio" id="choix" name="lieu" required>
      
    </div>
    

    <?php
     
     
     
     ; }*/
     ?>
     <hr>
<br>
     <h4 class="text-center">ETAPE 1-IDENTIFICATION</h4>
     <br><br>
     <div class="container">
     <div class="row ">
  <div class="col-4">
    <input type="text" name="prenom" class="form-control" placeholder="Prénom" aria-label="First name" required>
  </div>
 
  <div class="col-4">
    <input type="text" name="nom" class="form-control" placeholder="Nom" aria-label="Last name" required>
  </div>

  <div class="col-4">
  <input type="email" name="email" class="form-control" placeholder="Email" aria-label="email" required>
  </div>
  
</div>
</div>
<br>


<hr>
     <br>
     <h4 class="text-center">ETAPE 2-NOMBRE DE <span id="nombre1">PLACE</span> <span id="nombre"></span></h4>
     <br><br>
     <div class="container text-center">
  <div class="row groupe groupe1">
    <div class="col">
    - Plein tarif: 9€20
    <br><input class="text-center quantitetotal" id="quantite1" type="number" name="quantite1" placeholder="0"   >
    </div>
    <div class="col">
    Étudiant: 7€60
    <br><input class="text-center quantitetotal" id="quantite2" type="number" name="quantite2" placeholder="0"  >
    </div>
    <div class="col">
    Moins de 14 ans: 5€90
    <br><input class="text-center quantitetotal" id="quantite3" type="number" name="quantite3" placeholder="0"  >
    </div>
  </div>
</div>

<hr>
     <br><br>
     <h4 class="text-center">ETAPE 3-CHOIX DE LA PLACE <span class="nombre3"></span> </h4>
     <h5 class="text-center">(Les cases grisées représentent les places déja réservées)</h5>
     
     <br><br>
   

<div class="container">
    <div class="row text-center">
        <div class="col-2">
            <input type="checkbox" name=place[] value="1" class="ok" <?php compare(1);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="2" class="ok" <?php compare(2);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="3" class="ok" <?php compare(3);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="4" class="ok" <?php compare(4);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="5" class="ok" <?php compare(5);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="6" class="ok" <?php compare(6);?>>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-4">
            <input type="checkbox" name=place[] value="7" class="ok" <?php compare(7);?>>
        </div>
        <div class="col-4">
            <input type="checkbox" name=place[] value="8" class="ok" <?php compare(8);?>>
        </div>
        <div class="col-4">
            <input type="checkbox" name=place[] value="9" class="ok" <?php compare(9);?>>
        </div>
       
      
    </div>
    <div class="row text-center">
        <div class="col-2">
            <input type="checkbox" name=place[] value="10" class="ok" <?php compare(10);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="11" class="ok" <?php compare(11);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="12" class="ok" <?php compare(12);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="13" class="ok" <?php compare(13);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="14" class="ok" <?php compare(14);?>>
        </div>
        <div class="col-2">
            <input type="checkbox" name=place[] value="15" class="ok" <?php compare(15);?>>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-4">
            <input type="checkbox" name=place[] value="16" class="ok" <?php compare(16);?>>
        </div>
        <div class="col-4">
            <input type="checkbox" name=place[] value="17" class="ok" <?php compare(17);?>>
        </div>
        <div class="col-4">
            <input type="checkbox" name=place[] value="18" class="ok" <?php compare(18);?>>
        </div>
       
      
    </div>
    <div class="row text-center">
        <div class="col-12">
        <i class="bi bi-tv" style="font-size: 7rem; color: cornflowerblue;"></i>        </div>
</div>


<div class="rajouter d-flex justify-content-center">
<input class="btn btn-success text-center submit " type="submit" name="valid" value="VALIDER" disabled >
</div>
</form>

<?php

if(isset($_POST["valid"])){
    if(isset($_POST["prenom"]) && isset($_POST["nom"])){
        if(isset($_POST["quantite1"])||isset($_POST["quantite2"])||isset($_POST["quantite3"])){
            if(isset($_POST["place"])){
             
              $jj->inser2($b,$id);
              
            /*  echo "<br>";
   echo $_POST["prenom"];
   echo "<br>";
   echo $_POST["nom"];
   echo "<br>";
   echo $_POST["quantite1"];
   echo "<br>";
   echo $_POST["quantite2"];
   echo "<br>";
   echo $_POST["quantite3"];
   echo "<br>";
   echo implode(" ",($_POST["place"]));
   echo "<br>";
   echo $_GET["id"];*/
            }      
        }
    }


  
  }

  /*
  include'database1.php';
  
    $p=$db->prepare("INSERT  INTO pika2(id_site2,taille2,quant2,palettes2,quantpal2,heure2) VALUE (:id_site2,:taille2,:quant2,:palettes2,:quantpal2,:heure2)");
    $db->query(" DELETE FROM `pika2` WHERE quant2 IS NULL  ");
  
    $p->execute([
      "id_site2"=>$_SESSION["sitefb1franceboissons"],
      "taille2"=>$_POST["produit"],
      "quant2"=>$_POST["quant"],
      "palettes2"=>$_POST["palette"],
      "quantpal2"=>$_POST["quantpalette"],
      "heure2"=>date('H:i')
      ]);
      header("Location:evalog_coca.php");exit;*/
?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="script.js"></script>
     </body>
</html>




 




