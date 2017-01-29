<?php
class book 
{
	var $title; 
	var $price;

	function setPrice()
	{

	}

	function getPrice()
	{
		return $this ->price;
	}

	function setTitle()
	{

	}

	function getTitle()
	{
		return $this ->title;
	}

}

$book = new book(title, price);

$book ->title;
$book ->price;

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
		# code...
	}
	function getPassword()
	{
		return $this ->password;
	}
	function setEmail()
	{
		# code...
	}
	function getEmail()
	{
		return $this ->email;
	}
}
?>