<?php
require_once("database&co.php");

$aa=new DeleteFilm;
$bb=new DeleteSeance;
//$cc=new Transaction;
$dd=new Film2;
$ee=new Seance;



if(isset($_GET["delete"])){
$nom=$dd->afficheUnique($_GET["delete"])["nom"];
$synopsis=$dd->afficheUnique($_GET["delete"])["synopsis"];
$duree=$dd->afficheUnique($_GET["delete"])["duree_minute"];
$genre=$dd->afficheUnique($_GET["delete"])["genre"];
$url=$dd->afficheUnique($_GET["delete"])["url"];
$id=$dd->afficheUnique($_GET["delete"])["id"];


$txt="";
for($i=0;$i<sizeof($ee->affiche2($_GET["delete"]));$i++){
    $txt.= $ee->affiche2($_GET["delete"])[$i]["date"]."\n";
}

$log=$nom."\n".$synopsis."\n".$duree."\n".$genre."\n".$url."\n".$id;
$log2=$txt;

file_put_contents("backup.txt",$log);
file_put_contents("backup2.txt",$log2);

$aa->delete($_GET["delete"]);
$bb->delete($_GET["delete"]);

header("Location:exo8.php?result");
}