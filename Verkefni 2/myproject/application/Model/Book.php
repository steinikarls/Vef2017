<?php
namespace Mini\Model;
use Mini\Core\Model;

class Book extends Model
{
    




    protected $verkefni ='hallo heimur';
    protected $name ='kv. steini';

    public function getVerkefni()
    {
        return $this->verkefni;
    }
    public function setVerkefni($verkefni)
    {
        $this->verkefni =$verkefni;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
/*
    function __construct()
    {
        $this->verkefni =$bookVerkefni;
        $this->name =$bookName;
    }
    */
}
