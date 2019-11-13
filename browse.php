<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("basicheader.php")?>

    <!-- CSS
  ================================================== -->
    <link href="css/browse.css" rel="stylesheet">


</head>

<?php
require("db.php");

//initialize variables for buttons
$sort = "";
$vancouver = "";
$toronto = "";
$nature = "";
$citylife = "";
$clear = "";
$filternames = array('sort', 'vancouver', 'toronto', 'nature', 'citylife', 'clear');
$columnDisplay = array('location', 'id', 'image', 'city', 'scenery');

// session_start();

// if (!isset($_SESSION['filters'])) {
//   if(array_key_exists('submit', $_POST)) //the name of the submit button of the filters form
//   {
//      foreach($filternames as $filter)
//      {
//          $session_filters = $filter.":".$_POST[$filter].";";
//      }
//      $_SESSION['filters'] = $session_filters;
//   }
// } else {

//   $user_filters = explode(";" , $_SESSION['filters']);  
//   /*
//   $user_filters: Array (
//      [0] => location:somevalue
//      [1] => age:somevalue
//      [2] => language:somevalue
//   )
//   */
// }


if(isset($_POST['submit'])){
    $sort = isset($_POST['sort']) ? $_POST['sort'] : '';
    $citylife = isset($_POST['citylife']) ? $_POST['citylife'] : '';
    $nature = isset($_POST['nature']) ? $_POST['nature'] : '';
    $vancouver = isset($_POST['vancouver']) ? $_POST['vancouver'] : '';
    $toronto = isset($_POST['toronto']) ? $_POST['toronto'] : '';
    // $_SESSION['filters'] = $session_filters;
}  
else {
    echo "";

}

//pagination

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 3;
$offset = ($pageno-1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM `data`";
$resultcount = mysqli_query($con, $total_pages_sql);
$total_pages = ceil(mysqli_fetch_assoc($resultcount)["COUNT(*)"] / $no_of_records_per_page);

$query = "SELECT * FROM `data`";

//where
if (((!(empty($citylife))) || (!(empty($nature)))) || ((!(empty($vancouver))) || (!(empty($toronto))))) {
    $query .= " WHERE";
}

//filter scenery
if (!(empty($citylife)) && (empty($nature))) {
    $query .= " scenery = 'citylife'";
} else if (!(empty($nature)) && (empty($citylife))) {
    $query .= " scenery = 'nature'";
} else if (!(empty($citylife)) && !(empty($nature))){
    $query .= " scenery = 'citylife' OR scenery = 'nature'";
}

//connect filters
if (((!(empty($citylife))) || (!(empty($nature)))) && ((!(empty($vancouver))) || (!(empty($toronto))))) {
    $query .= " AND";
}

//filter city
if (!(empty($vancouver)) && empty($toronto)) {
    $query .= " city = 'Vancouver, BC'";
} else if (!(empty($toronto)) && empty($vancouver)) {
    $query .= " city = 'Toronto, ON'";
} else if (!(empty($vancouver)) && !(empty($toronto))) {
    $query .= " city = 'Vancouver, BC' OR city = 'Toronto, ON'";
}

//sort A-Z
if (!(empty($sort))) {
    $query .= "ORDER BY `location` ASC";
} 

$query .= " LIMIT $offset, $no_of_records_per_page";
$result = mysqli_query($con, $query);

echo $query;
  
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
        
    <!-- get resulting listings -->
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

    <!-- pages -->
        <div class="pagination">
            <div><a class="button_nav button_trans" href="?pageno=1">First</a></div>
            <div class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a class="button_nav button_trans"
                    href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
            </div>
            <div class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a class="button_nav button_trans"
                    href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
            </div>
            <div><a class="button_nav button_trans" href="?pageno=<?php echo $total_pages; ?>">Last</a></div>
        </div>
    </section>

       <!-- filter/sort footer -->
    <section class="footer">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="dropup">
                <a class="button_nav button_trans">Sort</a>
                <div class="dropup-content">
                    <input type="checkbox" name="sort" value="sort"
                        <?php if(isset($_POST['sort'])) echo "checked='checked'"; ?>>A-Z
                </div>
            </div>

            <div class="dropup">
                <a class="button_nav button_trans">Scenery</a>
                <div class="dropup-content">
                    <input type="checkbox" name="citylife" value="Citylife"
                        <?php if(isset($_POST['citylife'])) echo "checked='checked'"; ?>>Citylife<br>
                    <input type="checkbox" name="nature" value="Nature"
                        <?php if(isset($_POST['nature'])) echo "checked='checked'"; ?>>Nature
                </div>
            </div>
            <div class="dropup">
                <a class="button_nav button_trans">Location</a>
                <div class="dropup-content">
                    <input type="checkbox" name="vancouver" value="Vancouver, BC"
                        <?php if(isset($_POST['vancouver'])) echo "checked='checked'"; ?>>Vancouver, BC<br>
                    <input type="checkbox" name="toronto" value="Toronto, ON"
                        <?php if(isset($_POST['toronto'])) echo "checked='checked'"; ?>>Toronto, ON
                </div>
            </div>
            <input type="submit" name="submit" value="submit" class="button_nav button_trans">
        </form>
    </section>

    <?php
      // 4. Release returned data	
      mysqli_free_result($result);		
        ?>

</body>

</html>

<?php
  // 5. Close database connection  
  mysqli_close($con);
?>