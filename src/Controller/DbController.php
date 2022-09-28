<?php
namespace Chaminadepierre\Dyma\Controller;

use PDO;
use PDOException;


 class DbController extends PDO
{

  public function connect () {
      
    $db_host = 'localhost';
    $dbname = "root";
    $dbpassword = "root";
    $dbName = 'dyma';

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$dbName", $dbname, $dbpassword, 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
    );
        echo ('connexion ok');
        return $pdo;
        
    } catch (PDOException $e) {
        echo 'erreur à cause de : ' . $e->getMessage() ; 
    }

  }





}

?>