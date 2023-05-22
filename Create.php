<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="bod">
    <div class="box">
        <h2>Create Account</h2>
    <form action="" method="post" autocomplete="off">
         <p>Username</p>
         <input type="text" name="user" id="">
         
         <p>Password</p>
         <input type="password" name="pass" id="">
        <input type="submit" name="btn" id="" value="Create">
        <h6>Already have an account?<a href="Login.html">Log In </a></h6>
    </form>
    

</div>
<?php
include "connect.php";

if (isset($_POST['btn'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $querry=mysqli_query($conn, "insert into users values('','$username','$password')");
    if ($querry) {
        echo"<script>alert('Thank u for signing in')</script>";
    }
    else{
        echo"<script>alert('Incorrect')</script>";
    }
}
?>
</body>
</html>