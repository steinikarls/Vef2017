<?php  
namespace Mini\Model;

use Mini\Core\Model;


class Login extends Model
{
   
    public function addLogin($name ,$email, $password)
    {
        $sql = "INSERT INTO Notandi (name, email, password) VALUES (:name, :email, :password)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':email' => $email, ':password' => $password);
        $query->execute($parameters);
    }

    public function checkLogin( $email, $password)
    {

        $sql = "SELECT email, password, name  FROM Notandi where email LIKE :email AND  password LIKE :password";
        $parameters = array(':email' => $email,':password' => $password);
        $query = $this->db->prepare($sql);
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function addImage($myndaheiti, $link, $email)
    {
        $sql = "INSERT INTO userPhotos (myndaheiti, link, email) VALUES (:myndaheiti, :link, :email)";
        $query = $this->db->prepare($sql);
        $parameters = array(':myndaheiti' => $myndaheiti, ':link' => $link, ':email' => $email);
        $query->execute($parameters);
    }

    public function getImage( $email)
    {

        $sql = "SELECT myndaheiti, link, email  FROM userPhotos where email Like :email ";
        $parameters = array(':email' => $email);
        $query = $this->db->prepare($sql);
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function updateUser($newname,$name)
    {
        $sql = "UPDATE Notandi SET name = :newname WHERE name = :name";
        $query = $this->db->prepare($sql);
        $parameters = array(':newname' => $newname,':name' => $name);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function deleteImage( $myndaheiti)
    {

        $sql = "DELETE FROM userPhotos WHERE myndaheiti = :myndaheiti";
        $query = $this->db->prepare($sql);
        $parameters = array(':myndaheiti' => $myndaheiti);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


}


?>
