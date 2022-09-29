<?php 
namespace Chaminadepierre\Dyma\View;

use Chaminadepierre\Dyma\Controller\DeleteClientsController;
use Chaminadepierre\Dyma\Controller\ListesController;

require_once '../../vendor/autoload.php';
require_once './header.php';
$users = new ListesController();
$list = $users->listes();


?>
<style>
table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
</style>


<h1 class="d-flex justify-content-center"> Voici la liste des clients</h1>



<?php
for ($i=0; $i <count($list); $i++) { ?>
<table style="width: 100%;" >
    <thead>
        <tr>
            <th style="width: 20%;" colspan="2" ><?= $list[$i]["id"] ; ?></th>
            <th style="width: 20%;"colspan="1"  >Modifier</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $list[$i]["name"]; ?></td>
            <td><?= $list[$i]["surname"]; ?></td>
        

         <td><input type="button" value="Modifier n°<?= $list[$i]["id"] ; ?>">
         
         <input type="button" value="Supprimer n°<?= $list[$i]["id"] ;?>" ></td>
             </tr>
        


    </tbody>

</table> 
<?php }  ?>



<?php
require_once './footer.php';
?>