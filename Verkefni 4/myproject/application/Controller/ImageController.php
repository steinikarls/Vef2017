<?php  
namespace Mini\Controller;

use Mini\Model\Images;

class ImageController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // Instance new Model (Song)
        $Image = new Images();
        // getting all songs and amount of songs
        $Images = $Image->getAllImages();
        

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/Image/index.php';
        require APP . 'view/_templates/footer.php';
        
    }

    public function addImage()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_Image"])) {
            // Instance new Model (Song)
            $Image = new Images();
            // do addSong() in model/model.php
            $Image->addImage($_POST["imageName"], $_POST["imageName"],  $_POST["imagePath"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'image/index');
    }
}
    ?>