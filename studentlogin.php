<?php
session_start();
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $regno = $_POST["regno"];
    $password = $_POST["password"];

    $query = "SELECT * FROM students WHERE regno='$regno' AND password='$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_name'] = $row['fullname'];
        $_SESSION['student_regno'] = $row['regno'];

        header("Location: student/studentdashboard.php");
        exit();

    } else {
        $message = "Invalid Registration Number or Password";
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Login</title>
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>

<div class="overlay">

  <div class="login-card">
    <h2>WELCOME</h2>

    <form method="post">

<input type="text" name="regno" placeholder="Registration Number" required>

<input type="password" name="password" placeholder="Password" required>

<div class="options">
<label><input type="checkbox"> Remember me</label>
<a href="#">Forgot Password?</a>
<a href="register.php">Register</a>
</div>

<button type="submit" class="login-btn">Login</button>

</form>
    <p class="message"><?php echo $message; ?></p>
  </div>

</div>

</body>
</html>