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
  require('db.php'); //connection to db code
  include("auth_sessionActiveCheck.php");

 // Note: arrive at this page only if there is no active session
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
     $_SESSION['username'] = $username;
     // Redirect user to index.php
     header("Location: account.php");

   }else{
     echo "<h3>Username/password is incorrect.</h3>
     <p><br/>Click here to <a href='login.php'>Login</a></p>";
     echo "<p>Not registered yet? <a href='register.php'>Register Here</a></p>";
   }

}else{
?>

    <section class="container_form">
        <h1>LOGIN</h1>
        <form method="post" action="" name="login">
            Username: <input type="text" name="username" placeholder="Username" required />
            <br><br>
            Password: <input type="password" name="password" placeholder="Password" required />
            <br><br>
            <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Login">
            <br><br>
        </form>
        Not registered yet? <a class="sub_res button_nav button_trans" href='register.php'>Register Here</a>
    </section>
    <?php } ?>


</body>

</html>