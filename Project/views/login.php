<html>
<head>
	<title>Login page</title>
</head>
<body>
	<center>
	<fieldset style="width:80%;border-width:10px;border-color:mediumslateblue;">
	<center>
	 <h1  style="width:100%;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="login.php" style="color: white; ">Home</a>
			<a href="reg.php" style="color: white;">Registration</a>
	 </h1>
	</center>
	<form method="POST" action="../controller/loginCheck.php">
		<center>
		<fieldset style="height:80%;width:70%;border-width:10px;border-color:mediumseagreen;">
			<legend style="color:green; font-size:25;margin: 10%; text-align:left;" ><b>Login</b></legend>
			<h1 style="color:mediumseagreen; font-family:Lucida Handwriting;">Welcome to the Marketplace</h1>
			<table align="center" width="80%" >
				<tr></tr>
				<tr>
					<td> Login As 
					<select name="usr">
							<option value="Client">Client</option>
							<option value="Admin">Admin</option>
							<option value="Freelancher">Freelancer</option>
							
						</select><br>
						<hr>
					</td>
				</tr>

				</tr>
				<tr>
					<td style="color:blue">Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td style="color:blue">Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Log In" style="cursor: pointer;font-size:15;"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<a href="Forgot.php">Forgotten Password??</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</center>
	</form>
	</fieldset></center>
</body>
</html>