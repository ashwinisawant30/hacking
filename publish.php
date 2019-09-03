<!DOCTYPE html>
<html>
<head>
	<title>Publish Post</title>
</head>
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
<body>
<?php
include 'menu.php';
?>

	<div class="header">
       <h1>Make a Publication</h1>
     </div>
<form method="POST" action="" enctype="multipart/form-data">
	<div class="input-group">
	    <label>Title</label>
	    <input type="text" name="title"><br><br>
	    <label>Comment</label>
	    <textarea name="comment"></textarea><br><br>
	    <label>Image</label>
	    <input type="file" name="image"><br><br>
	    <label>Website</label>
	    <input type="url" name="website"><br><br>
	    <label>Contact/Email</label>
	    <input type="text" name="email"><br><br><br><br>
   </div>
        <div class="input-group">
	      <input type="submit" name="publish" value="publish" class="btn">
	    </div>
</form>
<?php
require 'config.php';

if(isset ($_POST['publish'])){
		$title=addslashes($_POST['title']);
		$comment=addslashes($_POST['comment']);
		$website=addslashes($_POST['website']);
		$email=addslashes($_POST['email']);
	    $datep= date('y-m-d');
		
		$imagepath=$_FILES['image']['tmp_name'];
		 echo "title : ".$title;
		 echo "<br>";
		 echo "comment : ".$comment;
		 echo "<br>";
		 echo "website : ".$website;
		 echo "<br>";
		 echo "email : ".$email;
		 echo "<br>";
		 echo "datep : ".$datep;
		 echo "<br>";
		 echo "image : ".$imagepath;
		 echo "<br>";
		 
		 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$picture =base64_encode($binary);

		 	echo $picture;
		 	
		 	$insert=mysqli_query($conn,"INSERT INTO newspost(title, comment,image, website, email, datep) VALUES ('$title','$comment','$picture','$website','$email','$datep')");
		 	if($insert){
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
		 	echo "choose your image profile";
		 }




	
}




?>


</body>
</html>
