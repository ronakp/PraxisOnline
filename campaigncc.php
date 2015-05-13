<?php
	include_once('session.php');
	if(!isset($_SESSION['username']))
	{
		header('Location:index.php');
	}
	else
	{	
		$username = $_SESSION['username'];
		$campaignname = $_POST['campaignname'];
		include_once('constants.php');
		$query = mysqli_query($con,"INSERT INTO ad_6b7a5f33fb3780b.campaign (username,cname) VALUES ('$username','$campaignname')");
		include_once('conclose');
		header('Location:dashboard.php');
	}
?>
