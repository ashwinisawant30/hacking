<!DOCTYPE html>
<html>
<head>
  <title>Display</title>
   <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style >
  .gallery{
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
  margin-left: 100px;
  margin-top: 40px;
}
  
</style>
<body>

<?php
   require 'config.php';
   include 'menu.php';
   
   $id=$_POST['show'];



   $select=mysqli_query($conn, "SELECT * FROM newspost WHERE id='$id'");
   if ($select) {
       while($r=mysqli_fetch_assoc($select)){
        $id=$r['id'];
        $title=$r['title'];
        $comment=$r['comment'];
        $image=$r['image'];
        $website=$r['website'];
        $email=$r['email'];
        $datep= $r['datep'];
        $link="editnews.php?id=".$id;
        $link2="deletenews.php?id=".$id;
        echo'<a href="'.$link.'">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
        echo "<br>";
        
         echo'<a href="'.$link2.'">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>';
          echo "<br>";
           echo "<br>";
        
?>
      
        <div class="row" style="width:90%;">
                <div class="col-md-2" style="margin-bottom: 6%">
                  <div class="gallery-box">
                   <div class="gallery-img">
                  <?php echo "<img src=data:image/jpg;base64,$image width='100%' height='50%'>";?>
                   </div>
                  </div>
              </div>
              <div class="col-md-10">
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
              </div>

    
      <?php
     }
    

       
   }else{
     echo $conn->error;
   }
?>

</body>
</html>