<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$conn = mysqli_connect("localhost","root","","student-news-portal");

if(isset($_POST['submit']))
{
    $scholarship_name = $_POST['scholarship_name'];
    $provider = $_POST['provider'];
    $eligibility = $_POST['eligibility'];
    $amount = $_POST['amount'];
    $start_date = $_POST['start_date'];
    $last_date = $_POST['last_date'];
    $application_link = $_POST['application_link'];
    $description = $_POST['description'];

    $sql = "INSERT INTO scholarships
    (scholarship_name, provider, eligibility, amount, start_date, last_date, application_link, description)
    
    VALUES
    ('$scholarship_name','$provider','$eligibility','$amount','$start_date','$last_date','$application_link','$description')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Scholarship Added Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Scholarship</title>
<link rel="stylesheet" href="../css/admindashboard.css">

<style>

.container{
margin-left:270px;
padding:20px;
width:500px;
}

input, textarea{
width:100%;
padding:10px;
margin:8px 0;
}

button{
padding:10px;
background:#1e3a5f;
color:white;
border:none;
cursor:pointer;
}

</style>

</head>

<body>

<div class="dashboard">

<?php include("sidebar.php"); ?>

<div class="container">

<h2>Add Scholarship</h2>

<form method="POST">

<label>Scholarship Name</label>
<input type="text" name="scholarship_name" required>

<label>Provider</label>
<input type="text" name="provider">

<label>Eligibility</label>
<input type="text" name="eligibility">

<label>Amount</label>
<input type="text" name="amount">

<label>Start Date</label>
<input type="date" name="start_date">

<label>Last Date</label>
<input type="date" name="last_date">

<label>Application Link</label>
<input type="text" name="application_link">
<label>Notification Link</label>
<input type="text" name="notification">

<label>Description</label>
<textarea name="description"></textarea>

<button name="submit">Add Scholarship</button>

</form>

</div>

</div>

</body>
</html>