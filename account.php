<!DOCTYPE HTML>
<html>

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

<?php 

include("headerbar.php");
require('db.php');
include("auth_sessionNotActiveCheck.php");


?>

   <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
    <p><a class="sub_res button_nav button_trans" href="logout.php">Logout</a></p>

    <?php
    $idquery = "SELECT `id` FROM `users` WHERE username= '".$_SESSION['username']."'";
    $idresult = mysqli_query($con,$idquery);
    while ($row = mysqli_fetch_assoc($idresult)){
        $id = $row["id"];
    }

    //If form submitted, insert values into the database.
 if (isset($_POST['username'])){
    
    // removes backslashes
    $username = stripslashes($_POST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);

    //Checking if username is in use already
    $uquery = "SELECT * FROM `users` WHERE username='$username'";
    $uresult = mysqli_query($con,$uquery) or die(mysql_error());
    $urow = mysqli_num_rows($uresult); 

   //username error
    if($urow>=1){
      echo "<h3>Username already in use. Choose different username.</h3>";
      
    //show form again
     ?>
     <section class="container_form">
         <h1>Change Username</h1>
         <form name="changeuser" action="" method="post">
             New Username: <input type="text" name="username" placeholder="Username" /><br><br>
             <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Change">
         </form>
     </section>
     <?php
    } else {
     //enter into users database
    $query = "UPDATE `users` SET `username` = '$username' WHERE `users`.`id`= '$id'";
    $result = mysqli_query($con,$query);
    $_SESSION['username'] = $username;
 
        //successfully registered page
        if($result){
            echo "<h3>You have changed your profile successfully.</h3>
            <p><br/>Click here to <a href='account.php'>update</a></p>";
            
        }
    }  
  } 
  
  else if (isset($_POST['password'])) {
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con,$password);

         //enter into users database
         $query = "UPDATE `users` SET `password` = '".md5($password)."' WHERE `users`.`id`= '$id'";
         echo $query;
         $result = mysqli_query($con,$query);
      
             //successfully registered page
             if($result){
                 echo "<h3>You have changed your profile successfully.</h3>";
             }
}
  
  else { //user did not enter yet username - show form to enter data
      ?>
    <section class="container_form">
        <h1>Change Username</h1>
        <form name="changeuser" action="" method="post">
            New Username: <input type="text" name="username" placeholder="Username"/><br><br>
            <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Change">
        </form>
    </section>
    <section class="container_form">
        <h1>Change Password</h1>
        <form name="changeuser" action="" method="post">
            New Password: <input type="text" name="password" placeholder="Password"/><br><br>
            <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Change">
        </form>
    </section>
    <?php } ?>
 

</body>

</html>
