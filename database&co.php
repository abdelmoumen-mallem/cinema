<?php




class Database{
    private static  $instance =null;
    
    
      public static  function data():PDO
      {
          if(self::$instance===null){
            self::$instance = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }
        return self::$instance;
    
          }

    }

    class Film{
        protected $table="";
        protected $titre="film";

    
        public function __construct()
        {
            $this->pdo=Database::data();
        }
       public function affiche():array{
       // SELECT * FROM `film` JOIN seance where seance.id_film=film.id
            $resultats = $this->pdo->prepare("SELECT * FROM {$this->titre} {$this->table}");
            $resultats->execute();
            $articles = $resultats->fetchAll();
            return $articles;
       }
    }

    class Film2 extends Film{
        protected $titre="film";
        protected $argument="id";
        protected $argument2=" ";


      
        //protected $table="WHERE id = ";
        public function afficheUnique($id):array{
        
            $resultats = $this->pdo->prepare("SELECT * FROM {$this->titre} WHERE {$this->argument}='$id' {$this->argument2} ");
            $resultats->execute();
            $articles = $resultats->fetch();
            return $articles;
       }
    }

    class Seance extends Film{
        protected $titre="seance";
        protected $argument="id_film";

        public function affiche2($id):array{
        
            $resultats = $this->pdo->prepare("SELECT DATE_FORMAT(date, 'Le %d-%m-%Y à %H H %i') as date1,date FROM {$this->titre} WHERE {$this->argument}=$id");
            $resultats->execute();
            $articles = $resultats->fetchAll();
            return $articles;
       }
    }

    class Place extends Film{
        protected $titre="billet";
        protected $argument="id_seance";

        

        public function affiche3($id):array{
            $resultats = $this->pdo->prepare("SELECT numero FROM {$this->titre} WHERE {$this->argument}='$id'");
            $resultats->execute();
            $articles = $resultats->fetchAll();
            return $articles;
       }
    }

    class Creneau extends Film{
        protected $where="id_film";

        public function affiche4($id):array{
            $resultats = $this->pdo->prepare("SELECT DATE_FORMAT(date, 'Le %d-%m-%Y à %H H %i') as date1,DATE_FORMAT(date, '%Y-%m-%dT%H:%i') as datation,id,id_film FROM `seance`  where {$this->where} =$id");
            $resultats->execute();
            $articles = $resultats->fetchAll();
            return $articles;
       }
    }

    class CreneauB extends Creneau{
        protected $where="id";

    }

    

    

    class InsertPlace {
        

        public function __construct()
        {
            $this->pdo=Database::data();
        }


        public function inser2($b,$id):void{
            $query = $this->pdo->prepare("INSERT INTO billet(nom,email,numero,prix1,prix2,prix3,tarif,id_film,id_seance,qrcode) VALUE (:nom,:email,:numero,:prix1,:prix2,:prix3,:tarif,:id_film,:id_seance,:qrcode)");
            $query->execute([
              "nom"=>$_POST["nom"]." ".$_POST["prenom"],
              "email"=>$_POST["email"],
            "numero"=>implode(" ",($_POST["place"])),
            "prix1"=>$_POST["quantite1"],
            "prix2"=>$_POST["quantite2"],
            "prix3"=>$_POST["quantite3"],
            "tarif"=>(intval($_POST["quantite1"])*9.2)+(intval($_POST["quantite2"])*7.6)+(intval($_POST["quantite3"])*5.9),
            "id_film"=>$b->affiche4($id)[0]["id_film"],
            "id_seance"=>$_GET["id"],
            "qrcode"=>uniqid()

            ]);
        }
    }

    class Billet extends Film2{
        protected $titre="billet";
        protected $argument="nom";
        protected $argument2=" ORDER BY id DESC LIMIT 1 ";

        public function afficheUnique1($id):array{
            //SELECT film.nom FROM `film` INNER JOIN billet ON film.id=3

            $resultats = $this->pdo->prepare("SELECT *,DATE_FORMAT(date_billet,'Géneré le %d-%m-%y à %H:%i') AS d FROM {$this->titre} WHERE {$this->argument}='$id' {$this->argument2} ");
            $resultats->execute();
            $articles = $resultats->fetch();
            return $articles;
       }
    }
    

    class Rappro1 extends Film{

        public function afficheUnique2($id):array{
            $resultats = $this->pdo->prepare("SELECT film.nom as f FROM `film` INNER JOIN billet ON film.id=$id ");
            $resultats->execute();
            $articles = $resultats->fetch();
            return $articles;
       }
    }

    class Rappro2 extends Film{

        public function afficheUnique3($id):array{
            $resultats = $this->pdo->prepare("SELECT DATE_FORMAT(seance.date,'le %d-%m-%y à %H:%i') as s FROM `seance` INNER JOIN billet ON seance.id=$id ");
            $resultats->execute();
            $articles = $resultats->fetch();
            return $articles;
       }
    }

    class Recup extends Film{
        public $argument="*, DATE_FORMAT(date_billet,'Géneré le %d-%m-%y à %H:%i') AS d";

        public function afficheUnique4($a,$b):array{
            $resultats = $this->pdo->prepare("SELECT {$this->argument}  FROM `billet` WHERE nom='$a' AND email='$b' ORDER BY id DESC ");
            $resultats->execute();
            $articles = $resultats->fetchAll();
            return $articles;
       }
    }

    class Recup2 extends Film{
        public $argument="COUNT(*)";

        public function afficheUnique5($a,$b):array{
            $resultats = $this->pdo->prepare("SELECT {$this->argument} AS count  FROM `billet` WHERE nom='$a' AND email='$b' ");
            $resultats->execute();
            $articles = $resultats->fetch();
            return $articles;
       }
    }

    class UpdateFilm extends Film{

        public function updateFilm($a,$b,$c,$d,$e,$f){
            $resultats = $this->pdo->prepare("UPDATE film SET nom='$a',synopsis='$b',duree_minute='$c',genre='$d',url='$e' WHERE id='$f'");
            $resultats->execute();
        }

    }

    class UpdateSeance extends Film{

        public function updateSeance($b,$c){
            $resultats = $this->pdo->prepare("UPDATE seance SET date='$b' WHERE id='$c'");
            $resultats->execute();
        }

    }

    class Recup3 extends Film2{
        protected $titre="film";
        protected $argument="nom";
    }

    class Recup4 extends Film2{
        protected $titre="seance";
        protected $argument="id";
    }

    class InserFilm extends InsertPlace {

        public function inser3($a,$b,$c,$d,$e):void{
            $query = $this->pdo->prepare("INSERT INTO film(nom,synopsis,duree_minute,genre,url) VALUE (:nom,:synopsis,:duree_minute,:genre,:url)");
            $query->execute([
              "nom"=>strtoupper($a),
              "synopsis"=>$b,
            "duree_minute"=>$c,
            "genre"=>strtoupper($d),
            "url"=>$e
            ]);
        }
    }

    class InserSeance extends InsertPlace {

        public function inser4($a,$b):void{
            $query = $this->pdo->prepare("  INSERT INTO seance(id_film,date) VALUE (:id_film,:date)");
            $query->execute([
              "id_film"=>$a,
              "date"=>$b
            ]);
        }
    }

    class DeleteFilm extends InsertPlace {
        protected $argument="id";
        protected $titre="film";

        public function delete($a):void{
         $query = $this->pdo->prepare("  DELETE FROM {$this->titre} WHERE {$this->argument} ='$a' ");
            $query->execute();
        }
            
    }

    class DeleteSeance extends DeleteFilm {
        protected $argument="id_film";
        protected $titre="seance";
    }


   

    class LastId{
        public function __construct()
        {
            $this->pdo=Database::data();
        }

        public function last(){
            $last=$this->pdo->lastInsertId();
            return $last;
        }
    }

    class Transaction extends LastId {

        public function begin(){
           $transac=$this->pdo->beginTransaction();
           return $transac;
        }

        public function commit(){
        $transac1=$this->pdo->commit();
        return $transac1;
        }

        public function intransaction(){
            $transac2=$this->pdo->inTransaction();
            return $transac2;
        }
    
        public function rollBack(){
            $transac3=$this->pdo->rollBack();
            return $transac3;
        }

     
        
    }

  

 
   
    
    

   

    