<?php
	$dbhost = "localhost";
	$dbname = "db_obw";
	$dbuser = "root";
	$dbpass = "";
 
	$server=mysql_connect ( $dbhost, $dbuser, $dbpass)or die("<h1>Server is currently unavailable</h1>");
	$conn=mysql_select_db($dbname) or die(mysql_error());
?>