<?php
	$database="sphider";
	$mysql_user = "user";
	$mysql_password = "password"; 
	$mysql_host = "localhost";
	$mysql_table_prefix = "";


	$mysql_dsn = "mysql:host=" . $mysql_host . ";dbname=" . $database;

	try {
		$db = new PDO($mysql_dsn, $mysql_user, $mysql_password);
	} catch (PDOException $e) {
			print($e->getMessage() . "<br>");
			print("<b>Cannot connect to database, check if username, password and host are correct.</b>");
			die();
	}
?>

