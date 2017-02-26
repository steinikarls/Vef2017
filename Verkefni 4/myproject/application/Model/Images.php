<?php  
namespace Mini\Model;

use Mini\Core\Model;


class Images extends Model
{
    public function getAllImages()
        {
            $sql = "SELECT imageID, imageName, imagePath, imageText FROM images";
            $query = $this->db->prepare($sql);
            $query->execute();

            // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
            // core/controller.php! If you prefer to get an associative array as the result, then do
            // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
            // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
            return $query->fetchAll();
        }


}


?>
