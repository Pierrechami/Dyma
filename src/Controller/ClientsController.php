<?php
namespace Chaminadepierre\Dyma\Controller;
use PDOException;
use Chaminadepierre\Dyma\Entity\Clients;
use Chaminadepierre\Dyma\Controller\DbController;

require_once './index.php';





class ClientsController extends DbController
{

    public function clients (){
        if (isset($_GET["name"]) && isset($_GET["surname"]) && isset($_GET["submit"])) {
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
            $name = $user->getName();
            $surname = $user->getSurname();
        }
        try{
            $pdo = $this->connect();
            $statement = $pdo->prepare("INSERT INTO User VALUES (
                :name , :surname
            )");
            $statement->execute(array(':name' => $name , ':surname' => $surname));
           }catch(PDOException $e){
               echo  $e->getMessage();
               return false; 
           }
    

      }





        


  

}




?>