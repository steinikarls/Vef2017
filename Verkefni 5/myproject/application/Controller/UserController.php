<?php  
namespace Mini\Controller;

use Mini\Model\User;

class UserController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // Instance new Model (Song)
        $user = new user();
        // getting all songs and amount of songs
        $users = $user->getuser();
        $image = $user->getimage();
        $AmountOfMyndir = $user->getAmountOfMyndir();
        

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/user/index.php';
        require APP . 'view/_templates/footer.php';

        
    }
    public function detail()
    {
            $filename = $_GET["filename"];
            $link = $_GET["link"];
            $caption = $_GET["caption"];

            require APP . 'view/_templates/header.php';
            require APP . 'view/user/output.php';
            require APP . 'view/_templates/footer.php';
        
    }
     public function notandi()
    {
            $users_id = $_GET["users_id"];
            $user = new user();
            // getting all songs and amount of songs
            $userimages = $user->getuserimages($users_id);

            require APP . 'view/_templates/header.php';
            require APP . 'view/user/useroutput.php';
            require APP . 'view/_templates/footer.php';
        
    }
    public function search()
    {
        if (isset($_POST["submit_search"])) {
            // Instance new Model (Song)
            $user = new user();
            // do addSong() in model/model.php
            $search = $user->goSearch($_POST["search"]);
            require APP . 'view/_templates/header.php';
            require APP . 'view/user/searchoutput.php';
            require APP . 'view/_templates/footer.php';
        }
        else
        {
            header('location: ' . URL . 'user/index');
        }
    }


}
    ?>
    