<?php
// register.php
if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $regno = $_POST['regno'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $college = $_POST['college'];

    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password != $confirm){
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        echo "<script>alert('Registration Successful (DB not connected yet)');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="container">
<div class="card">
<h2>Student Registration</h2>
<form method="POST">
<div class="section">Personal Details</div>
<input type="text" name="fullname" placeholder="Full Name" required>
<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email ID" required>
<input type="text" name="mobile" placeholder="Mobile Number" required>
<div class="section">Academic Details</div>
<input type="text" name="regno" placeholder="Register Number" required>
<select name="course" required>
<option value="">Select Course</option>
<option>BSc</option>
<option>BCA</option>
<option>BCom</option>
<option>BBA</option>
<option>BA</option>
<option>MSc</option>
<option>MCA</option>
<option>MBA</option>
</select>
<select name="semester" required>
<option value="">Year / Semester</option>
<option>1st Semester</option>
<option>2nd Semester</option>
<option>3rd Semester</option>
<option>4th Semester</option>
<option>5th Semester</option>
<option>6th Semester</option>
</select>
<input type="text" name="college" placeholder="College Name" required>
<div class="section">Security</div>
<input type="password" name="password" placeholder="New Password" required>
<input type="password" name="confirm" placeholder="Confirm Password" required>
<button name="register">Register</button>
</form>
</div>
</div>
</body>
</html>
