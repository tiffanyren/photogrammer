<!DOCTYPE HTML>
<html>

<?php
//include auth.php file on all secure pages
include("auth_sessionNotActiveCheck.php");
?>

<head>

<?php include("basicheader.php")?>

    <!-- CSS
  ================================================== -->
    <link href="css/account.css" rel="stylesheet">

    <!-- JS
	================================================== -->
    <script src="js/listing.js"></script>

</head>

<body>

<?php include("headerbar.php")?>

    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
    <a class="sub_res button_nav button_trans" href="logout.php">Logout</a>

</body>

</html>