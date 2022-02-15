<!DOCTYPE html>
<html lang="en">

<head>
<?php include("basicheader.php")?>

    <!-- CSS
  ================================================== -->
    <link href="css/index.css" rel="stylesheet">

</head>

<?php

require("db.php");

session_start();

if(isset($_SESSION["username"])){
    $query = "SELECT `city` FROM `users` WHERE username= '".$_SESSION['username']."'";
    $result = mysqli_query($con, $query);
      
      // Test if there was a query error
      if (!$result) {
        die("Database query failed.");
      }
}

?>

<body>

<?php include("headerbar.php")?>


    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <section class="container_home">
    <?php
    if(isset($_SESSION["username"])){
        $data = mysqli_fetch_assoc($result); ?>
    <img src="img/<?php echo $data['city']?>.jpg"><?php } else { ?>
    <img src="img/vancouver.jpg"><?php } ?>
        <div class="img_text">
            <h1>DISCOVER</h1>
            <p>the places most coveted by Instagram photographers</p>
        </div>
        <div class="container_buttons">
            <a class="button_nav button_trans" href="browse.php">Browse Now</a>
        </div>
    </section>

    <section class="container_prod">
        <div class="block">
            <a href="listing1.php"><img src="img/antonina-bukowska-9Pq42qFP9vY-unsplash.jpg" alt="cherry blossoms 1">
        </div>
        <div class="block">
            <a href="listing1.php"><img src="img/kyle-ryan-nIujk826wE0-unsplash.jpg" alt="cambie street bridge 1">
          </div>
        <div class="block">
            <a href="listing1.php"><img src="img/polsonpier.jpg" alt="cambie street bridge 2">
        </div>

    </section>



</body>

</html>