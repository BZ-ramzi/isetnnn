<?php

	 mysql_connect("localhost", "root", "");
	mysql_select_db("cap_express");

	
$id = $_POST['id_ent'];

/********************/


 
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }


$file=basename($_FILES["photo"]["name"]);

$image =$_FILES["photo"]["name"];
	$uploadedfile = $_FILES['photo']['tmp_name'];
     
 
 	if ($image) 
 {	
 	
 		$filename = stripslashes($_FILES['photo']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		


 $size=filesize($_FILES['photo']['tmp_name']);




if($extension=="jpg" || $extension=="jpeg")
{
$uploadedfile = $_FILES['photo']['tmp_name'];
$src = imagecreatefromjpeg($uploadedfile);

}
else 

if($extension=="png")
{
$uploadedfile = $_FILES['photo']['tmp_name'];
$src = imagecreatefrompng($uploadedfile);

}
else 
{
$src = imagecreatefromgif($uploadedfile);
}


list($width,$height)=getimagesize($uploadedfile);


$newwidth=500;
$newheight=500;
$tmp=imagecreatetruecolor($newwidth,$newheight);


imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

 

$filename = "../assets/logo/". $_FILES['photo']['name'];

imagejpeg($tmp,$filename,100);

 

imagedestroy($src);
imagedestroy($tmp);

}



/*******************/
    
	
	
	
$sql = "UPDATE entreprise SET src_logo ='$file' WHERE id_entreprise = '$id' ";
 
 
	
	$req = mysql_query ($sql);
	
	
	if ($req) {
	
		header('Location: ../profile/?update logo avec succee');

	}
	else {
		header('Location: ../profile/?update logo echoue');
	}
?>

