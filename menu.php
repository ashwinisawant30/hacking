<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #808080;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

/*li a.active {
  color: white;
  background-color: #4CAF50;
}*/
</style>
</head>
<body>

<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="home.php">ADMIN HOME</a></li>
  <li><a href="publish.php">PUBLISH</a></li>
  <li><a href="getid.php">MANAGE PUBLICATION</a></li>
  <li><a href="adminlogin.php">LOGOUT</a></li>
</ul>

</body>
</html>