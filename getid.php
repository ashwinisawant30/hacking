<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>

</head>
<style>
  .form-label-group{
    margin-top: 30px;
  }
  


</style>
<body>
<body>
  <?php
include 'menu.php';
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <center>
            <form class="form-signin" method = "POST" action = "show.php">
              <div class="form-label-group">
                <label>Enter Id</label>
                <input type="text" name = "show" class="form-control" placeholder="Your code here" required autofocus><br><br><br>
              </div>
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name = "submit" value ="submit">SHOW POST</button>
              
              <hr class="my-4">
             

            </form>
          </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

?>
</body>

<p id = "result"></p>




</body>
</html>
