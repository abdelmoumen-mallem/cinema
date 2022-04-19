<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-success" href="exo10.php">CINEMA LES-CODEURS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

            <?php
        if($_SERVER['REQUEST_URI']!=="/exo00/exo10.php"){
          echo 
          ' <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="exo10.php"><button class="btn btn-outline-success">ACCUEIL</button></a>
        </li>';
        }
        ?>
           
        <?php
        if($_SERVER['REQUEST_URI']!=="/exo00/exo4.php" && $_SERVER['REQUEST_URI']!=="/exo00/exo8.php" && $_SERVER['REQUEST_URI']!=="/exo00/exo7.php"){
          echo 
          '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="exo4.php"><button class="btn btn-outline-success">RECUPERER MES BILLETS</button></a>
          </li>';
        }
        ?>
        
        
            </ul>
            <?php
        if($_SERVER['REQUEST_URI']!=="/exo00/exo8.php" && $_SERVER['REQUEST_URI']!=="/exo00/exo8.php?result"){
          echo 
          ' <li class="d-flex">
          <a class="nav-link active" aria-current="page" href="exo8.php"><button class="btn btn-outline-success">ADMINISTRATEUR ?</button></a>
        </li>';
        }
        ?>

           
          
            
           
          </div>
        </div>
      </nav>
      
    