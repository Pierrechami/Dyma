<?php
namespace ClientsController ;

use Db\DbController;
use User\Clients;
use PageAccueil;
use PDOException;

class ClientsController extends DbController
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

        if($$this->clients() !== null){

            $user = $this->clients();
            $name = $user->getName();
            $surname = $user->getSurname();
        }
        try{
            $pdo = $this->connect();
            $statement = $pdo->prepare("INSERT INTO User VALUES (
                $name , $surname
            )");
            $statement->execute();
           }catch(PDOException $e){
               echo  $e->getMessage();
               return false; 
           }
    

      }





        


  

}




?>