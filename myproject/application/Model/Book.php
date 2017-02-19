<?php
namespace Mini\Model;
use Mini\Core\Model;

class Book extends Model
{
    private $verkefni ="hallo heimur";
    private $name ="kv. steini";
    public function getVerkefni()
    {
        return $this->verkefni;
    }

    public function getName()
    {
        return $this->name;
    }

    function __construct($bookVerkefni,$bookName)
    {
        $this->verkefni =$bookVerkefni;
        $this->name =$bookName;
    }
}
