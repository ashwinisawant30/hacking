<!DOCTYPE html>
<html lang="en">
<head>
  <title>News Hacking</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .header img{
         margin-left: 85px;
         margin-top: 30px;
         
    }
  h2{
    margin-top: 35px;
    margin-left: 150px;
  }
  * {box-sizing: border-box;}
/*body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}*/

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #F73636;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size*/ 
@media only screen and (max-width: 1000px) {
  .text {font-size: 20px}
}

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
/*h1{
  color: black;
  text-align: center;
  font-size: 300%;
}
.log{
  margin-left:1000px;
  margin-top: 0px;
  margin-bottom:10px;
  font-size: 20px;
  border:1px solid black;
  padding: 5px 18px;

}
.log,.hover{
  border:2px;
  background-color: grey;
}
.pagenation{
  margin-top: 60%;
}*/


  </style>
</head>
<body>
  <div class="header">
   <div class="row">
    <div class="col-xs-2">
<img src="logo.png" style="height: 200px;width: 200px;">
    
  </div>
  
<div class="jumbotron text-center">
  <h2>See something wrong? Do something right.</h2>
  <p><i style="font-size:24px" class="fa">&#xf0e0;</i> hackersnews01@gmail.com</p> <p><i style="font-size:24px" class="fa">&#xf098;</i> +918888425601</p>
</div>
</div>
<center><h2>Latest News</h2></center>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Checkers.jpg" width="1100px" height="300px">
  <div class="text">Checkers and Raaly's Restaurant Chains Hit by PoS Malware</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Wipro.jpg"  width="1100px" height="300px">
  <div class="text">Wipro Confirms a Potential breach of Some Employee Accounts</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Alert.jpg"  width="1100px" height="300px">
  <div class="text">WhatsApp Critical Flaw Allowed Installation of Spyware on to Phones</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

 
 <?php
   include 'config.php';

//select all

  $perpage = 6;
          if(isset($_GET["page"]))
          {
             $page = intval($_GET["page"]);
          }
          else
          {
             $page = 1;
          }
            $calc = $perpage * $page;
            $start = $calc - $perpage;
            $result = mysqli_query($conn, "SELECT * FROM newspost ORDER BY id DESC  Limit $start, $perpage");
            $rows = mysqli_num_rows($result);
            if($rows)
            {
              $i = 0;
            while($your_post = mysqli_fetch_assoc($result)) 
            {
          $id=$your_post['id'];
          $title=$your_post['title'];
          $comment=$your_post['comment'];
          $image=$your_post['image'];
          $website=$your_post['website'];
          $email=$your_post['email'];
          $datep= date('y-m-d');
        
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
        }//while
      }//if rows
  ?>
    <br><br>
    

</div>


<!----page number footer
echo "<br><br><br>";
    if(isset($page))
    {
      $result = mysqli_query($conn,"select Count(*) As Total from news");
      $rows = mysqli_num_rows($result);
      if($rows)
      {
        $rs = mysqli_fetch_assoc($result);
        $total = $rs["Total"];
      }
      echo "<div class='pagenation'>";
      $totalPages = ceil($total / $perpage);
      if($page <=1 )
        {
          echo"he";
        //echo "<span id='page_links' style='font-weight: bold;'>&laquo;</span>";
        }
      else
      {
        $j = $page - 1;
        echo "<a href='index.php?page=$j'>&laquo;</a>";
      }
      for($i=1; $i <= $totalPages; $i++)
      {
        if($i<>$page)
        {
          echo "<a href='index.php?page=$i'>$i</a>";
        }
          else
          {
            echo "<a href='index.php?page=$i' class='active'>$i</a>";
          }
      }//for loop
       if($page == $totalPages )
        {
         //echo "<span id='page_links' style='font-weight: bold;'>&raquo;</span>";
        }
       else
        {
          $j = $page + 1;
          echo "<a href='index.php?page=$j'>&raquo;</a>";
        }
      echo "</div>";
  }--->
     

 


</body>
</html>
