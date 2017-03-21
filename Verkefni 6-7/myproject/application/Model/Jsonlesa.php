<?php
namespace Mini\Model;

use Mini\Core\Model;



class Jsonlesa extends Model
{
    public function getalljson()
    {
        $contents = file_get_contents('json/myndir.json');
 		$contentsDecoded = json_decode($contents, true);
        return $contentsDecoded;
    }
 
    public function writealljson($myndheiti, $link)
    {
    	$contents = file_get_contents('json/myndir.json');
 		$contentsDecoded = json_decode($contents, true);
    	$jsonData['myndheiti'] = $myndheiti;
    	$jsonData['link'] = $link;
    	array_push($contentsDecoded['imagearray'], $jsonData);
		$contents = json_encode($contentsDecoded);
		$file = fopen('json/myndir.json', 'w');
		fwrite($file, $contents);
		fclose($file);
    	
		
		return $contents;

    }

    public function getalljsonpizza()
    {
        $contents = file_get_contents('json/pizza.json');
 		$contentsDecoded = json_decode($contents, true);
        return $contentsDecoded;
    }
 
    public function writealljsonpizza($myndheiti, $link)
    {
    	$contents = file_get_contents('json/myndir.json');
 		$contentsDecoded = json_decode($contents, true);
    	$jsonData['myndheiti'] = $myndheiti;
    	$jsonData['link'] = $link;
    	array_push($contentsDecoded['imagearray'], $jsonData);
		$contents = json_encode($contentsDecoded);
		$file = fopen('json/myndir.json', 'w');
		fwrite($file, $contents);
		fclose($file);
    	
		
		return $contents;

    }
    public function getalljsonbensin()
    {
	$contents = file_get_contents('http://apis.is/petrol');
    $contentsDecoded = json_decode($contents);
    return $contentsDecoded;
    }




}
?>