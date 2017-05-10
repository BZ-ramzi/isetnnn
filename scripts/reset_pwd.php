<?php

	 mysql_connect("localhost", "root", "");
	mysql_select_db("cap_express");

	
	$id = $_POST['id_ent'];
	 $password= SHA1($_POST['pwd']);


    
	
	
	
$sql = "UPDATE entreprise SET password ='$password' WHERE id_entreprise = '$id' ";
 
 
	
	$req = mysql_query ($sql);
	
	
	if ($req) {
	
		header('Location: ../profile/?update password avec succee');

	}
	else {
		header('Location: ../profile/?update password echoue');
	}
?>

