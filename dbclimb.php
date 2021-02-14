<?php

	$hostname = "192.168.30.23";
	$username = "root";
	$passwd = "";
	$dbname = "ClimbRoutes";
	
	$con = mysql_connect($hostname, $username, $passwd);
	if(!$con)
		die("Database connection error" . mysql_error());
	
	$db = mysql_select_db($dbname);
	if(!$db)
		die("Database selection failed" . mysql_error());

?>