<?php
session_start();
// Demo student credentials
$valid_email = "student@gmail.com";
$valid_password = "1234";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == $valid_email && $password == $valid_password){

        $_SESSION['student_name'] = "Keerthana";
header("Location: student/studentdashboard.php");
exit();

    }else{
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>
<link rel="stylesheet" href="./css/studentlogin.css">
</head>
<body>

<div class="container">

<div class="login-box">

<h2>Student Login</h2>

<div class="error">
<?php if(isset($error)) {echo $error;} ?>
</div>

<form method="POST">

<input type="email" name="email" placeholder="Enter Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<button type="submit" name="login">Login</button>

</form>

<div class="links">

<a href="#">Forgot Password?</a><br><br>

<a href="register.php">Register</a>

<button class="google-btn">Login with Google</button>

</div>

</div>

</div>

</body>
</html>