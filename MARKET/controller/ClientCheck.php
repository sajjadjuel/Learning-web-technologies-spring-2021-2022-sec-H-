<?php 
	session_start();
	$id="1";
	if(isset($_REQUEST['submit']))
	{
			$file = fopen('../model/user.txt', 'r');
			while(!feof($file))
			{
				$user = fgets($file);
				$userArray = explode('|', $user);
				if(trim($userArray[0]) != null)
					{
						$id=$userArray[0];
						$id=(int)$id+1;
					}
			}
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];
		$src = $_FILES['myfile']['tmp_name'];
		$des = "../uploads/".$_FILES['myfile']['name'];
		move_uploaded_file($src, $des);

		if($username != null && $password != null && $email != null){

			$user = $id."|".$username."|".$password."|".$email."|".$gender."|".$dob."\r\n";
			$file = fopen("../model/user.txt", 'a');
			fwrite($file, $user);
			fclose($file);
			
			header('location: ../views/Dashboard.php');

		}else{
			echo "null submission..";
		}
	}	
?>