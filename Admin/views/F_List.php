<?php
include('header.php');
	require('../model/AdminModel.php');

	if(isset($_COOKIE['status'])){
			$users= getAllFreelancer();
}
?>

<html>
<head>
	<title>Freelancher List</title>
</head>
<body>

	<a href="Dashboard.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>
	<br><br>

	<table border="1">
		<legend><b>Freelancer List :</b></legend>
		<tr>
			<td>No</td>
			<td>Name</td>
			<td>Password</td>
			<td>Gender</td>
			<td>Date of Birth</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php 
				//$file = fopen('../model/user.txt', 'r');
				for($i=0; $i<count($users); $i++){
		?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['name']?></td>
			<td><?=$users[$i]['password']?></td>
			<td><?=$users[$i]['gender']?></td>
			<td><?=$users[$i]['dob']?></td>
			<td><?=$users[$i]['email']?></td>
			<td>
				<a href="edit_F.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="../controller/delete_F.php?id=<?=$users[$i]['id']?>">Delete</a>
			</td>
		</tr>
		<?php	
			}
		?>
		
	</table>
</body>
</html>