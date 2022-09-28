<?php
namespace Chaminadepierre\Dyma\Controller;
use PDOException;
use Chaminadepierre\Dyma\Entity\Clients;
use Chaminadepierre\Dyma\Controller\DbController;
use PDO; 

require_once './index.php';





class ClientsController 
{

    public function clients (){
        if (isset($_GET["name"]) && isset($_GET["surname"])) {
            $name =  $_GET["name"];
            $surname = $_GET["surname"];

        $user = new Clients();
        $user->setName($name);
        $user->setSurname($surname);
        return $user; 

        } else {
            echo 'le formulaire n\'est pas rempli correctement oooooo';
            return null ; 
        }

        
    }

      public function create () {

        if($this->clients() !== null){

            $user = $this->clients();
            $Username = $user->getName();
            $Usersurname = $user->getSurname();
        }
        try{
            $pdo = new DbController();
            $pdo = $pdo->connect();
            $statement = $pdo->prepare("INSERT INTO User VALUES (
                :Username , :Usersurname
            )");
            $statement->execute(array(':Username' => $Username , ':Usersurname' => $Usersurname));
           }catch(PDOException $e){
               echo 'la création en bbd ne marche pas ';
               return false; 
           }
    

      }





        


  

}




?>