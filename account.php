<!DOCTYPE HTML>
<html>

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Instagrammer</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/account.css" rel="stylesheet">

    <!-- Favicons
	================================================== -->
    <link rel="shortcut icon" href="">

    <!-- JS
	================================================== -->
    <script src="js/listing.js"></script>

</head>

<body>

    <section class="container_nav">
        <div class="nav_left">
            <a href="index.php" id="site-title">The Photogrammer</a>
        </div>
        <div class="nav_right">
            <nav>
                <a href="browse.php">Browse</a>
                <a href="account.php">My Account</a>
            </nav>
        </div>
    </section>

    <!-- Primary Page Layout
	================================================== -->
    <!-- all content goes in here -->

    <?php

//referenced W3Schools PHP Form https://www.w3schools.com/php/php_forms.asp

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passwordErr = $proglevelErr = "";
$name = $email = $gender = $password = $proglevel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }  
  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }  


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>

<section class="container_form">
    <h1>REGISTER/LOGIN</h1>
    <p><span class="error">* required field</span></p>
    <form method="post" action="account.php">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Password: <input type="text" name="password" value="<?php echo $password;?>">
        <span class="error">*<?php echo $passwordErr;?></span>
        <br><br>
        <input class="sub_res button_nav button_trans" type="submit" name="submit" value="Submit">
        <input class="sub_res button_nav button_trans" type="reset" name="reset" value="Reset">

        <?php

if(isset($_POST['submit']))
{
    echo "<br/> <br/>";
    echo "Form submitted successfully!";
    echo "<br/> ";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    echo $name.", ";
    echo $email.", ";
    echo $password;
    echo "<br/> ";

    $file = fopen('output.txt', 'a');
    $txt = $name.", ".$email.", ".$password."\n";
    fwrite($file, $txt);						
    fclose($file);
} 

?>
    </form>
</section>








</body>

</html>