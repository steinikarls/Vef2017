<?php  
namespace Mini\Controller;

use Mini\Model\Jsonlesa;

class JsonController
{
    public function index()
    {
        $Jsonlesa = new Jsonlesa();
        $json = $Jsonlesa->getalljson();
        require APP . 'view/_templates/header.php';
        require APP . 'view/json_folder/index.php';
        require APP . 'view/_templates/footer.php';    
    }

    public function jsonSkrifari()
    {
        if (isset($_POST["submit_json"]))
        {
            $Jsonlesa = new Jsonlesa();
            $json = $Jsonlesa->writealljson($_POST["myndheiti"],$_POST["link"]);
        }
        header('location: ' . URL . 'json/index');
    }

    public function pizzastatus()
    {
        $Jsonlesa = new Jsonlesa();
        $json = $Jsonlesa->getalljsonpizza();
        require APP . 'view/_templates/header.php';
        require APP . 'view/json_folder/pizzaindex.php';
        require APP . 'view/_templates/footer.php';  
    }

    public function petrol()
    {
        $Jsonlesa = new Jsonlesa();
        $json = $Jsonlesa->getalljsonbensin();
        require APP . 'view/_templates/header.php';
        require APP . 'view/json_folder/petrol.php';
        require APP . 'view/_templates/footer.php';  
    }   
}
    ?>
    