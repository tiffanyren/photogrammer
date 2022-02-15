<?php 
    
    $host         = "localhost";
    
    $username     = "root";
    
    $password     = "";

    $dbname       = "dbusers";
    
    $result_array = array();
    /* Create connection */
    $conn = new mysqli($host, $username, $password, $dbname);

    /* Check connection  */
    if ($conn->connect_error) {
         die("Connection to database failed: " . $conn->connect_error);
    }
    /* SQL query to get results from database */


//initialize variables
$sort = "";
$vancouver = "";
$toronto = "";
$nature = "";
$citylife = "";
$clear = "";
$filternames = array('sort', 'vancouver', 'toronto', 'nature', 'citylife', 'clear');
$columnDisplay = array('location', 'id', 'image', 'city', 'scenery');

//set variables
if(isset($_POST['submit'])){
    $sort = isset($_POST['sort']) ? $_POST['sort'] : '';
    $citylife = isset($_POST['citylife']) ? $_POST['citylife'] : '';
    $nature = isset($_POST['nature']) ? $_POST['nature'] : '';
    $vancouver = isset($_POST['vancouver']) ? $_POST['vancouver'] : '';
    $toronto = isset($_POST['toronto']) ? $_POST['toronto'] : '';
}  
else {
    echo "";

}
//pagination
// reference https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 6;
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

  $result = $conn->query($query);
  /* If there are results from database push to result array */
  
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          array_push($result_array, $row);
      }
  }

  // echo $query;
  
  // Test if there was a query error
  if (!$result) {
    die("Database query failed.");
  }

  /* send a JSON encded array to client */
  echo json_encode($result_array);
  
  $conn->close();

?>