<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- eitthvað sem eg er að testa


<form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Select Image:</h2><input type="file" name="image"> <br/>
        <input type="submit" name="upload" Value="Upload now"><br/>
-->
<?php 

class Image
{

	var $name;
	var $size;
	var $owner;
	var $slóð;



	// get functions 	
	function getImageName()
	{
		return $this->name;
	}
	function getOwnerName()
	{
		return $this->owner;
	}
	function getImageSize()
	{
		return $this->size;
	}
	function getPath()
	{
		return $this->slóð;
	}

	// set functions
	function setImageName()
	{
		$image->name ='Bubbi Morthens';
	}
	function setOwnerName()
	{
		$image->owner ='Bubbi Morthens';
	}
	function setImageSize()
	{
		$image->size ='500';
	}
	function setPath()
	{
		$image->slóð ='https://musicallovertheworlddotcom.files.wordpress.com/2014/03/1765_bubbi_1141.jpg';
	}
$image = new Image; 
}
 ?>

</body>
</html>