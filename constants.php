<?php
	$server="us-cdbr-iron-east-01.cleardb.net";
	$user="b1639b3d867e18";
	$password="2dd6d005";
	$db="ad_6b7a5f33fb3780b";

	$con = mysqli_connect($server,$user,$password);
	
	if(!$con) 
	{
		die("System cannot connect to database");
		echo "not good";
	}
	else
	{
		mysqli_select_db($con,$db); //OR die ("Cannot select database");
	}
?>