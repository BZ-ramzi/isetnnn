<?php

	
	 mysql_connect("localhost", "root", "");
	mysql_select_db("cap_express");




if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pwd']) && !empty($_POST['pwd']))) {





	$sql = 'SELECT count(*) FROM entreprise WHERE login="'.mysql_escape_string($_POST['login']).'" AND password="'.mysql_escape_string($_POST['pwd']).'"';
	
	
	  
	$sql2 = 'SELECT * FROM entreprise WHERE login="'.mysql_escape_string($_POST['login']).'" AND password="'.mysql_escape_string($_POST['pwd']).'"';
	

	

	$req = mysql_query($sql);
	$req2 = mysql_query($sql2);
	$data = mysql_fetch_array($req);
    $row = mysql_fetch_assoc($req2);

	mysql_free_result($req);
	mysql_close();




	if ($data[0] == 1) {
	
	    session_start();

		$_SESSION['login'] = $_POST['login'];

        $_SESSION['id_entreprise'] = $row['id_entreprise'];
		
        $_SESSION['matricule'] = $row['matricule'];



  
header('Location:../dashboard/'); 
   

		exit();
	}
	else
	    {
 
header('Location:../login/?Erreur'); 
	}

	}
?>

