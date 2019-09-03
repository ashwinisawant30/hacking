<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		
		.header{
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: rgba(0,0,0,0.5);
	text-align: center;
	border: 1px solid #80C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form,.content{
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border:1px solid#80C4DE;
	background: rgba(0,0,0,0.5);
	border-radius: 0px 0px 10px 10px;
}
.input-group{
	margin: 10px 0px 10px 0px;
}
.input-group label{
	display:black;
	text-align: left;
	margin: 3px;
	color: white;
}
.input-group input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	background: transparent;
	border:1px solid black;
}
.btn{
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border:none;
	background: transparent;
	border-radius: 5px;
	border:2px solid black;
}
}
	</style>
</head>
<body background="" style="background-repeat: no-repeat; background-size: cover;">
	<div class="header">
	<h1>Login</h1>
    </div>
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="input-group">
		<label>Email</label>
		<input type="text" name="email"><br><br>
	    </div>
	    <div class="input-group">
        <label>Password</label>
		<input type="password" name="password1"><br><br>
	    </div>
		<div class="input-group">
		<button type="submit" name="submit" value="login" class="btn">Login</button>
	   </div>


	</form>

	<?php
	require 'config.php';

	if(isset ($_POST['submit'])){
		// create variables to store values from form
		$email=$_POST['email'];
		$password=md5($_POST['password1']);
		//select some information inside table
		$select=mysqli_query($conn,"SELECT * FROM adminreg WHERE email='$email' AND password='$password'");
		$number=mysqli_num_rows($select);// get number of result
		//echo $number;
		//echo "<br>";
		//echo $email.'-'.$password;

		if($select){
			//echo "good";
			if($number==1){
				session_start();
				$userinfo=$select->fetch_assoc();
				$userid=$userinfo['id'];
				$_SESSION['id']=$userid;
				echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";
			}
			else{
				echo "wrong password";
			}

		}

		else{
		 		echo ("error".mysqli_error($conn));
		 	}


	}




	?>
</body>
</html>