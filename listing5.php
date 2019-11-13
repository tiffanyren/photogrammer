<!DOCTYPE html>
<html lang="en">

<head>

<?php include("basicheader.php")?>

    <!-- CSS
  ================================================== -->
    <link href="css/listing.css" rel="stylesheet">

    <!-- JS
	================================================== -->
    <script src="js/listing.js"></script>

</head>

<?php

require("db.php");

$columnDisplay = array('location', 'id', 'image', 'city', 'scenery', 'description', 'map');

$query = "SELECT * FROM `data` WHERE id='5'";
$result = mysqli_query($con, $query);
  
  // Test if there was a query error
  if (!$result) {
    die("Database query failed.");
  }
?>


<body>

<?php include("headerbar.php"); ?>

    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <?php include("listingbody.php")?>


</body>

</html>