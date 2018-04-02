<?php


	$db_host = "localhost";
	$db_name = "math.megaline.kg";
	$db_user = "platinum";
	$db_pass = "Arozaupalanalapuazora171016";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>