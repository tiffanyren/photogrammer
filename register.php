<!DOCTYPE HTML>
<html>

<head>
<?php include("basicheader.php")?>
   
    <!-- CSS
  ================================================== -->
    <link href="css/account.css" rel="stylesheet">


</head>

<body>

<?php 

include("headerbar.php");
require('db.php');
include("auth_sessionActiveCheck.php");

?>

    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->
 <?php

 // If form submitted, insert values into the database.
 if (isset($_POST['username'])){
   // removes backslashes
   $username = stripslashes($_POST['username']);
   //escapes special characters in a string
   $username = mysqli_real_escape_string($con,$username);

   $email = stripslashes($_POST['email']);
   $email = mysqli_real_escape_string($con,$email);

   $password = stripslashes($_POST['password']);
   $password = mysqli_real_escape_string($con,$password);

   //Checking if username is in use already
   $uquery = "SELECT * FROM `users` WHERE username='$username'";
   $uresult = mysqli_query($con,$uquery) or die(mysql_error());
   $urow = mysqli_num_rows($uresult);

    //Checking if email is in use already
    $equery = "SELECT * FROM `users` WHERE email='$email'";
    $eresult = mysqli_query($con,$equery) or die(mysql_error());
    $erow = mysqli_num_rows($eresult);

if (($urow>=1) || ($erow>=1) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
  //username error
   if($urow>=1){
     echo "<h3>Username already in use. Choose different username.</h3>";  
   } 
   //email error
   if($erow>=1) {
    echo "<h3>Email already in use. Choose different email.</h3>"; 
   }
   //email not valid
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h3>Email invalid.</h3>";  
   }
   //show form again
   ?>
   <section class="container_form">
   <h1>REGISTRATION</h1>
   <form name="registration" action="" method="post">
    Username: <input type="text" name="username" placeholder="Username" required /><br><br>
    Email: <input type="text" name="email" placeholder="Email" required /><br><br>
    Password:  <input type="password" name="password" placeholder="Password" required /><br><br>
      <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Register">
    </form>
 </section>
 <?php
   
  } else {
    //enter into users database
   $query = "INSERT into `users` (username, email, password)
           VALUES ('$username', '$email', '".md5($password)."')";
   $result = mysqli_query($con,$query);

    //successfully registered page
   if($result){
     echo "<h3>You are registered successfully.</h3>
     <p><br/>Click here to <a href='login.php'>Login</a></p>";
   }
 }

 } else { //user did not enter yet username - show form to enter data
     ?>
<section class="container_form">
    <h1>REGISTRATION</h1>
      <form name="registration" action="" method="post">
      Username: <input type="text" name="username" placeholder="Username" required /><br><br>
      Email: <input type="text" name="email" placeholder="Email" required /><br><br>
      Password:  <input type="password" name="password" placeholder="Password" required /><br><br>
        <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Register">
      </form>
      </section>
  <?php } ?>    

</body>

</html>