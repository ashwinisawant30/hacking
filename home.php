<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<style >
  
  .gallery{
             /* display: grid;
              grid-template-columns: 1fr 2fr;*/
              width: 90%;
             display: grid;
             grid-template-columns: 1fr 2fr;
            }
             a{
            }
        color: white;
      }
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  color: white;
  margin-left: 100px;
  margin-top: 50px;
  border-radius: 20px;
}

div.gallery img {
 
}

div.desc {
  padding: 15px;
  text-align: center;
  color: black;
  max-height: 75px;
}
div.desc1 {
  padding: 15px;
  text-align: center;
  color: black;
  max-height: 75px;
}
div.gallery-img{
   height: 100%;
   width: 100%;
}
.gallery-details{
  margin-left:1px;
  margin-top: 2%;

}
</style>
<body>

<?php
   require 'config.php';
   include 'menu.php';



   $select=mysqli_query($conn, "SELECT * FROM newspost");
   if ($select) {
   	   while($r=mysqli_fetch_assoc($select)){
   	   	$id=$r['id'];
   	    $title=$r['title'];
        $comment=$r['comment'];
        $image=$r['image'];
        $website=$r['website'];
        $email=$r['email'];
        $datep= $r['datep'];
    
   	   	
?>
      
	      <div class="row" style="width:90%;">
                
              <div class="col-md-8">
                <div class="gallery-details">
                  <h4>Title:<?php echo $title; ?><font color="red"><?php echo"(".$id.")";?></font>
                  </h4>
                  <div>
                  <?php echo $comment; ?>
                  </div>
                  <a href="<?php echo $website;?>"></a>
                    <div>
                      <span><a href="<?php echo $website;?>"><?php echo $website;?></a></span><br>
                      <span style="float:right;"><font color="green"><?php echo $datep;?></font></span>
                    </div>
                  </div>          
                  </div>
                  <div class="col-md-4" style="margin-bottom: 6%">
                  <div class="gallery-box">
                   <div class="gallery-img">
                  <?php echo "<img src=data:image/jpg;base64,$image width='20%' height='30%'>";?>
                   </div>
                  </div>
              </div>
              </div>
              


    
      <?php
     }
    

   	   
   }else{
   	 echo $conn->error;
   }
?>

</body>
</html>