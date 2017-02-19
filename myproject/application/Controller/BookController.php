<?php



namespace Mini\Controller;

use Mini\Model\Book;

class BookController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    

    public function halloHeimur()
    {
        $Book = new Book();    /*
        $bookVerkefni = $Book->getVerkefni();
        $bookName = $book->getName();*/


         $bookName = "steini";
         $bookVerkefni ="hallo heimur";


        require APP . 'view/_templates/header.php';
        require APP . 'view/home/halloheimur.php';
        require APP . 'view/_templates/footer.php';
    }




}
