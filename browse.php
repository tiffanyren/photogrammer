<!DOCTYPE html>
<html lang="en">

<head>

<?php include("basicheader.php")?>
    
    <!-- CSS
  ================================================== -->
    <link href="css/browse.css" rel="stylesheet">


</head>

<?php
//initialize variables for buttons
$sortalpha = "";
$vancouver = "";
$toronto = "";
$nature = "";
$city = "";
$clear = "";

?>


<?php 

require("db.php");

$columnDisplay = array('location', 'id', 'image', 'city', 'scenery');

$query = "SELECT * FROM `data`";
$result = mysqli_query($con, $query);
  
  // Test if there was a query error
  if (!$result) {
    die("Database query failed.");
  }
?>

<body>

<?php include("headerbar.php")?>


    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <section class="container_prod">
    <?php 
    while ($row = mysqli_fetch_assoc($result)) {			   
        echo '<div class="block">';
           echo '<a href="listing'.$row["$columnDisplay[1]"].'.php">'.
           '<img src='.$row["$columnDisplay[2]"].'></a>'.
           '<h3>'.$row["$columnDisplay[0]"].'</h3>'.
           '<h4>'.$row["$columnDisplay[3]"].'</h4>';
        echo '</div>';
       }
    ?>
    </section>

    <section class="footer">
    <a class="button_nav button_trans" href="browse.php">Sort A-Z</a>
    <div class="dropup">
            <a class="button_nav button_trans">Scenery</a>
            <div class="dropup-content">
                <button type="submit" value="city">City</button>
                <button type="submit" value="nature">Nature</button>
            </div>
        </div>

        <div class="dropup">
            <a class="button_nav button_trans">Location</a>
            <div class="dropup-content">
                <a href="#">Vancouver, BC</a>
                <a href="#">Toronto, ON</a>
            </div>
        </div>
    </section>



</body>

</html>