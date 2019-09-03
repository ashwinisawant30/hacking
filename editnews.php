


<!DOCTYPE html>
<html>
<head>
	<title>News Edit</title>
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
form{
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
	background: transparent;
	border:none;
	border-radius: 5px;
	border:2px solid black;
}	
	</style>
</head>
<body>
	<?php
	include 'menu.php';
	require 'config.php';
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	    $select=mysqli_query($conn,"SELECT * FROM newspost WHERE id='$id'");
	    $num_rows=mysqli_num_rows($select);
	    if ($num_rows>0) {
	    	while ($row=$select->fetch_assoc()) {
	    		$id=$row['id'];
	    		$title=$row['title'];
	    		$comment=$row['comment'];
	    		$image=$row['image'];
	    		$website=$row['website'];
	    		$email=$row['email'];
	    		$datep=$row['datep'];

	

	    		
	    	}
	    }
	}

	?>
	<div class="header">
	  <h1>Edit post</h1>
	 </div>
	<form method="POST" action="" enctype="multipart/form-data">
	 <div class="input-group">
			<label>Title</label>
			<input type="text" name="title" value="<?php echo $title ?>"><br><br>

			<label>Comment</label>
			<input type="text" name="comment" value="<?php echo $comment ?>"><br><br>

	        <label>Image</label>
			<?php echo "<img src= data:image/jpg;base64,$image width='5%' height='5%'>";?>
			<input type="file" name="image"><br><br>

			<label>Website</label>
			<input type="text" name="website" value="<?php echo $website ?>"><br><br>

			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email ?>"><br><br>

		</div>
            <div class="input-group">
	          <input type="submit" name="submit" value="Edit" class="btn">
            </div>

	</form>

	<?php
	include 'config.php';
	

	if(isset ($_POST['submit'])){
		$title=$_POST['title'];
		$comment=$_POST['comment'];
		$image=$_POST['image'];
		$website=$_POST['website'];
		$email=$_POST['email'];
	    $datep= date('y-m-d');
		
		$imagepath=$_FILES['image']['tmp_name'];
		 echo "title : ".$title;
		 echo "<br>";
		 echo "comment : ".$comment;
		 echo "<br>";
		 echo "image : ".$imagepath;
		 echo "<br>";
		 echo "website : ".$website;
		 echo "<br>";
		 echo "email : ".$email;
		 echo "<br>";
		 echo "datep : ".$datep;
		 echo "<br>";
		 
		 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$picture =base64_encode($binary);

		 	echo $picture;
		 	
		 	$update=mysqli_query($conn,"UPDATE newspost SET title='$title',comment='$comment',image='$picture',website='$website',email='$email',datep='$datep' WHERE id='$id'");
		 	if($update){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($conn));
		 	}

		 }
		 else{
		 	$update=mysqli_query($conn,"UPDATE newspost SET title='$title',comment='$comment',image='$picture',website='$website',email='$email',datep='$datep' WHERE id='$id'");
		 	if($update){
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo $conn->error;
		 	}
		 	}




	
}








	?>


</body>
</html>
