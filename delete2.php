<?php

require_once("database&co.php");

$aa=new InserFilm;
$bb=new InserSeance;

if(filesize('backup.txt')>0){
    $fichier=fopen("backup.txt","r");
    $a1= fgets($fichier,1).fgets($fichier);
    $a11=strlen($a1);
    $a1[($a11-1)]="\0";

    $a2=fgets($fichier);
    $a22=strlen($a2);
    $a2[($a22-1)]="\0";


    $a3=fgets($fichier);
    $a33=strlen($a3);
    $a3[($a33-1)]="\0";

    $a4=fgets($fichier);
    $a44=strlen($a4);
    $a4[($a44-1)]="\0";

    $a5=fgets($fichier);
    $a55=strlen($a5);
    $a5[($a55-1)]="\0";

    
    
    $replace= str_replace("'","''",$a2);
    $aa->inser3($a1,$replace,$a3,$a4,$a5);

    for($i=0;$i<sizeof(file("backup2.txt"));$i++){
        //echo file("backup2.txt")[$i]."<br>";
        $bb->inser4(file("backup.txt")[5]+1,file("backup2.txt")[$i]);
        }


    
    file_put_contents('backup.txt', '');
    file_put_contents('backup2.txt', '');

    
    header("Location:exo8.php?result");
}
else{
    header("Location:exo8.php?vide");
}







