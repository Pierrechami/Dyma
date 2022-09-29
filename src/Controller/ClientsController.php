<?php
namespace Chaminadepierre\Dyma\Controller;
use PDOException;
use Chaminadepierre\Dyma\Entity\Clients;
use Chaminadepierre\Dyma\Controller\DbController;
use PDO; 

require_once './index.php';





class ClientsController 
{

    public function clients(){
    
        

        if (isset($_GET["name"]) && isset($_GET["surname"]) && $_GET["name"] !== '' && $_GET["surname"] !== '') {
            $name =  $_GET["name"];
            $surname = $_GET["surname"];

        $user = new Clients();
        $user->setName($name);
        $user->setSurname($surname);
        return $user; 

        } else {
            return null ; 
        }

        
    }

      public function create() {

        

        if($this->clients() !== null){

            $user = $this->clients();
            $Username = $user->getName();
            $Usersurname = $user->getSurname();
        }else {
            if(isset($_REQUEST["submit"])){
                if (empty($_GET["name"]) || empty($_GET["surname"])) {
                    echo 'vous n\'avez pas remplie le formulaire correctement ! ';
                }
            }
            return $this->clients() ; 
        }
        try{
            $pdo = new DbController();
            $pdo = $pdo->connect();
            $statement = $pdo->prepare("INSERT INTO User VALUES (
               :id , :Username , :Usersurname
            )");
            $statement->execute(array(':id' => null ,':Username' => $Username , ':Usersurname' => $Usersurname));
                echo " Bravo vous avez été enregistrer en tant que $Username $Usersurname  " ;

           }catch(PDOException $e){
               echo 'la création en bbd ne marche pas ';
               return false; 
           }
    

      }





        


  

}




?>