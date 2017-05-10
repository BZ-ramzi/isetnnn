<?php

	 mysql_connect("localhost", "root", "");
	mysql_select_db("cap_express");

	
	$id = $_POST['id_ent'];
$name = $_POST['nom'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];

    
	
	
	
$sql = "UPDATE responsable SET nom_complet ='$name', tel ='$tel', email ='$mail' WHERE id_entreprise = '$id' ";
 
 
	
	$req = mysql_query ($sql);
	
	
	if ($req) {
	
		header('Location: ../profile/?update responsable avec succee');

	}
	else {
		header('Location: ../profile/?update responsable echoue');
	}
?>

