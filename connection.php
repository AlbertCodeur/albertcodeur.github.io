<?php
	$host="localhost";
	$dbname="basetest";
	$user="root";
	$pass="";

	$conn=mysqli_connect($host,$user,$pass,$dbname);
		if(!conn)
		{
			echo "<h1> echec de contact avec la base de donnees </h1>";
		}
?>