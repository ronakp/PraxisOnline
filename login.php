<?php
	
	if(isset($_REQUEST['submit']))
	{
		include ('constants.php');

			
			$username = $_POST['username'];
			
			$password = $_POST['password'];
			
			$access = mysqli_query($con,"SELECT * FROM user WHERE (username = '$username') AND (password = '$password')");
			
			$accessrow = mysqli_num_rows($access);
			
			if($accessrow == 1)
			{
				include('session.php');
				$_SESSION['username'] = $username;
				header('Location: dashboard.php');
			}
			else
			{
				header('Location: index.php');
			}
			
		include('conclose.php');
	}
?>
