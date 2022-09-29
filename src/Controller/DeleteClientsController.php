<?php
namespace Chaminadepierre\Dyma\Controller;

use Chaminadepierre\Dyma\Controller\DbController;
use Chaminadepierre\Dyma\Entity\Clients;

class DeleteClientsController extends Clients {

    public function delete ($id) {
        $pdo = new DbController();
        $pdo = $pdo->connect(); 
        $statement = $pdo->prepare("DELETE FROM 'User' WHERE 'id' = :id");
        $statement->bindParam(':id' , $id) ; 
        $statement->execute() ; 
        return true;

    }

}