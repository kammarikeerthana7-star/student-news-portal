<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Demo login credentials
    if ($username == "admin" && $password == "1234") {
        $message = "Login successful!";
    } else {
        $message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
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
      <input type="text" name="username" placeholder="Username" required>
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