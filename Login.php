<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="bdy">
    <div class="box">
        <h2>Log In</h2>
    <form action="" method="post" autocomplete="off">
         <p>Username</p>
         <input type="text" name="user" id="">
        
         <p>Password</p>
         <input type="password" name="pass" id="">

        <input type="submit" name="btn" id="" value="Sign In">
        Don't have an account?<a href="Create.html">Create </a>
    </form>

</div>
<?php
include"connect.php";

if(isset($_POST['btn'])){
$username = $_POST['user'];
$password = $_POST['pass'];

// Validate the credentials
$query = "SELECT * FROM users WHERE u_Name = '$username' AND u_Password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
  // Authentication successful
  // Perform further actions like setting session variables, redirecting to a dashboard, etc.
  echo "<script>alert('Login successful.!')</script>";
} else {
  // Authentication failed
  echo "<script>alert('Wrong username or password!')</script>";
}
}
?>
</body>
</html>