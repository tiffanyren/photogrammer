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

 if (isset($_POST['username'])){

   // clean up
   $username = stripslashes($_POST['username']);
   $username = mysqli_real_escape_string($con,$username);

   $password = stripslashes($_POST['password']);
   $password = mysqli_real_escape_string($con,$password);

   //Checking user against database data
   $query = "SELECT * FROM `users` WHERE username='$username'
   and password='".md5($password)."'";
   $result = mysqli_query($con,$query) or die(mysql_error());
   $rows = mysqli_num_rows($result);

   if($rows==1){
     $_SESSION['username'] = $username;
     // Redirect user to account.php page
     header("Location: account.php");

   }else{
     //unsuccessful
     echo "<h3>Username/password is incorrect.</h3>
     <p><br/>Click here to <a href='login.php'>Login</a></p>";
     echo "<p>Not registered yet? <a href='register.php'>Register Here</a></p>";
   }

}else{
?>
    <!-- login form -->
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