<?php
namespace Chaminadepierre\Dyma\Controller;

use PDO;
use Chaminadepierre\Dyma\Controller\DbController;


class ListesController 
{

    public function listes ()
    {
        $pdo = new DbController(); 
        $pdo = $pdo->connect();
        $statement = $pdo->prepare("SELECT * FROM User") ;
        $statement->execute();

        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
        


    }






}


?>