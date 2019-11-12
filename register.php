<!DOCTYPE HTML>
<html>

<head>
<?php include("basicheader.php")?>
   
    <!-- CSS
  ================================================== -->
    <link href="css/account.css" rel="stylesheet">


</head>

<body>

<?php include("headerbar.php")?>

    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

 <?php
 require('db.php');
 include("auth_sessionActiveCheck.php");

 // If form submitted, insert values into the database.
 if (isset($_POST['username'])){
   // removes backslashes
   $username = stripslashes($_POST['username']);
   //escapes special characters in a string
   $username = mysqli_real_escape_string($con,$username);

   $password = stripslashes($_POST['password']);
   $password = mysqli_real_escape_string($con,$password);

   //Checking is user existing in the database or not
   $query = "SELECT * FROM `users` WHERE username='$username'
   and password='".md5($password)."'";
   $result = mysqli_query($con,$query) or die(mysql_error());
   $rows = mysqli_num_rows($result);

   if($rows==1){
     echo "<h3>Username already in use. Choose different username.</h3>";
     ?>
     <h1>Registration</h1>
     <form name="registration" action="" method="post">
       <input type="text" name="username" placeholder="Username" required />
       <input type="password" name="password" placeholder="Password" required />
       <input type="submit" name="submit" value="Register" />
     </form>
   <?php  
   } else

   {
   $query = "INSERT into `users` (username, password)
           VALUES ('$username', '".md5($password)."')";
   $result = mysqli_query($con,$query);

   if($result){
     echo "<h3>You are registered successfully.</h3>
     <br/>Click here to <a href='login.php'>Login</a>";
   }
 }

 } else { //user did not enter yet username - show form to enter data
     ?>
<section class="container_form">
    <h1>REGISTRATION</h1>
      <form name="registration" action="" method="post">
      Username: <input type="text" name="username" placeholder="Username" required />
      Password:  <input type="password" name="password" placeholder="Password" required />
        <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Register">
      </form>
      </section>
  <?php } ?>    

</body>

</html>