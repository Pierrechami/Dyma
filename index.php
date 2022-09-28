<?php 

namespace PageAccueil ; 

require_once './src/View/header.php';

//$nomDomaine = $_SERVER["HTTP_HOST"]; // string(14) "localhost:8888"
//$chemin = $_SERVER["REQUEST_URI"]; // string(20) "/dyma/"


?>

  <form action="" method="get">
   
   <h1 class="h3 mb-3 fw-normal">Ajoutez-vous </h1>

   <div class="form-floating">
     <input type="text" name="name" class="form-control" id="floatingInput">
     <label for="name" >Nom</label>
   </div>
   <div class="form-floating">
     <input type="text" name="surname" class="form-control" id="floatingInput" >
     <label for="surname" >Prénom</label>
   </div>

 
   <button class="w-100 btn btn-lg btn-primary" type="submit">Ajouter</button>
   <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
 </form>



<?php


require_once './src/View/footer.php';

?>