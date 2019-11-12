<?php
//connect to the db
$con = mysqli_connect("localhost","root","","TIFFANY_REN");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
