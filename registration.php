<!DOCTYPE html>
<html>
<head>
	<title>Admin Register</title>
</head>
<body>
  <form method="POST" action="">
  	<label>User Name</label>
  	<input type="text" name="username" id="username" placeholder="Enter Name"><br><br>
  	<label>Email</label>
  	<input type="text" name="email" id="email" placeholder="Enter Mail Id"><br><br>
  	<label>Password</label>
  	<input type="password" name="password1" id="password1" placeholder="*********"><br><br>
  	<label>Confirm Password</label>
  	<input type="password" name="password2" id="username" placeholder="********"><br><br><br><br>
  	<input type="submit" name="submit" value="submit">

  </form>
</body>
</html>
<?php
require 'config.php';

if (isset($_POST['submit'])) {
	$username=addslashes($_POST['username']);
	$email=addslashes($_POST['email']);
	$password1=addslashes($_POST['password1']);
	$password2=addslashes($_POST['password2']);

	if ($password1==$password2) 
	{
		$pass=md5($password1);

		$insert=mysqli_query($conn,"INSERT INTO adminreg(username,email,password)VALUES ('$username','$email','$pass')");
		if ($insert) {
			echo "<script language='javascript'>";
		    echo "alert('Inserted Successfully')";
		    echo "</script>";
		}
		else{
			echo $conn->error;
		}
	}
}

?>