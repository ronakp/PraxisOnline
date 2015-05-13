<?php
	include_once('session.php');
	if(!isset($_SESSION['username']))
	{
		header('Location:index.php');
	}
	else
	{	
		$username = $_SESSION['username'];
		$id = $_GET['id'];
		$cn = $_POST['campaignname']; 
		$ct = $_POST['campaigntext']; 
		
		include_once('constants.php');
		$query = mysqli_query($con,"UPDATE ad_6b7a5f33fb3780b.campaign SET cname='$cn', ctext='$ct' WHERE cid='$id'");
		include_once('conclose');
		header('Location:dashboard.php');
	}
?>
