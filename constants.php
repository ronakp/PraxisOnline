<?php
	$server="ronakpatel.ipagemysql.com";
	$user="ronakpatel";
	$password="ronakalpha1910";
	$db="praxis";

	$con = mysqli_connect($server,$user,$password);
	
	if(!$con) 
	{
		die("System cannot connect to database");
	}
	else
	{
		mysqli_select_db($con,$db); //OR die ("Cannot select database");
	}
?>