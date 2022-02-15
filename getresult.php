<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<?php
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

$sort = "";
$vancouver = "";
$toronto = "";
$nature = "";
$citylife = "";
$clear = "";
$filternames = array('sort', 'vancouver', 'toronto', 'nature', 'citylife', 'clear');
$columnDisplay = array('location', 'id', 'image', 'city', 'scenery');

$sql = "SELECT * from `data`";
$paginationlink = "getresult.php?page=";

//where
if (((!(empty($citylife))) || (!(empty($nature)))) || ((!(empty($vancouver))) || (!(empty($toronto))))) {
        $sql .= " WHERE";
    }
    
    //filter scenery
    if (!(empty($citylife)) && (empty($nature))) {
        $sql .= " scenery = 'citylife'";
    } else if (!(empty($nature)) && (empty($citylife))) {
        $sql .= " scenery = 'nature'";
    } else if (!(empty($citylife)) && !(empty($nature))){
        $sql .= " scenery = 'citylife' OR scenery = 'nature'";
    }
    
    //connect filters
    if (((!(empty($citylife))) || (!(empty($nature)))) && ((!(empty($vancouver))) || (!(empty($toronto))))) {
        $sql .= " AND";
    }
    
    //filter city
    if (!(empty($vancouver)) && empty($toronto)) {
        $sql .= " city = 'Vancouver, BC'";
    } else if (!(empty($toronto)) && empty($vancouver)) {
        $sql .= " city = 'Toronto, ON'";
    } else if (!(empty($vancouver)) && !(empty($toronto))) {
        $sql .= " city = 'Vancouver, BC' OR city = 'Toronto, ON'";
    }
    
    //sort A-Z
    if (!(empty($sort))) {
        $sql .= "ORDER BY `location` ASC";
    } 


$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;

$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
$faq = $db_handle->runQuery($query);

if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink);	

$output = '<section class="container_prod">';
foreach($faq as $k) {
	$output .= '<div class="block">';
           $output .='<a href="listing'.$k["$columnDisplay[1]"].'.php">'.
           '<img src='.$k["$columnDisplay[2]"].'></a>'.
           '<h3>'.$k["$columnDisplay[0]"].'</h3>'.
           '<h4>'.$k["$columnDisplay[3]"].'</h4>';
        $output .= '</div>';
}
$output .= '</section>';
if(!empty($perpageresult)) {
$output .= '<div id="pagination">' . $perpageresult . '</div>';
}
print $output;
?>
 