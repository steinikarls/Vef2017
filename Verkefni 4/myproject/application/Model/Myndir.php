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
    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $imageName imageName
     * @param string $imageText imageText
     * @param string $imagePath imagePath
     * @param string $id imageID
     */
    public function addImage($id ,$imageName, $imageText, $imagePath)
    {
        $sql = "INSERT INTO images (imageID, imageName, imageText, imagePath) VALUES (:imageID, :imageName, :imageText, :imagePath)";
        $query = $this->db->prepare($sql);
        $parameters = array(':imageID' => $id, ':imageName' => $imageName, ':imageText' => $imageText, ':imagePath' => $imagePath);

        // useful for debugging: you can see the SQL behind above construction by using:
        

        $query->execute($parameters);
    }


}


?>
