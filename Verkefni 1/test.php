<?php
class book 
{
	var $title; 
	var $price;

	function setPrice()
	{
		$book ->price ='5995';
	}

	function getPrice()
	{
		return $this ->price;
	}

	function setTitle()
	{
		$book ->price ='Markaðsmenning';
	}

	function getTitle()
	{
		return $this ->title;
	}

}

$book = new book();



/**
* 
*/
class publisher extends book
{
	
	var $getPublisher;
	var $setPublisher;

$staerdfraedi = (object) array('title' => 'stæ 403', 'price' => '6500');
$islenska = (object) array('title' => 'Brennunjáls', 'price' => '3500');
$efnafraedi = (object) array('title' => 'Nát301', 'price' => '5000');
	/*
	$staerdfraedi= new stdObject();
	$staerdfraedi->title = "Stæ 403";
	$staerdfraedi->price = "6500";
	$islenska= new stdObject();
	$islenska->title = "Brennunjáls";
	$islenska->price = "3500";
	$efnafraedi = new stdObject();
	$efnafraedi->title = "Nát301";
	$efnafraedi->price = "5000";
*/
var_dump($staerdfraedi);

}

/**
* 
*/
class Notandi
{
	var $email;
	var $password;
	
		function setPassword()
	{
		$Notandi->password ='skilekkimikið';
	}
	function getPassword()
	{
		return $this ->password;
	}
	function setEmail()
	{
		$Notandi->email='help@help.com';
	}
	function getEmail()
	{
		return $this ->email;
	}
}

?>