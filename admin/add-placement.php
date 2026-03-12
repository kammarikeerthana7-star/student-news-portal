<?php
session_start();
// protect admin page
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}


// database connection
$conn = mysqli_connect("localhost","root","","student-news-portal");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

// insert data
if(isset($_POST['submit']))
{
    $company_name = $_POST['company_name'];
    $job_role = $_POST['job_role'];
    $qualification = $_POST['qualification'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];
    $drive_date = $_POST['drive_date'];
    $last_date = $_POST['last_date'];
    $notification = $_POST['notification'];
    $application_link = $_POST['application_link'];
    $description = $_POST['description'];

    $sql = "INSERT INTO placements 
    (company_name, job_role, qualification, salary, location, drive_date, last_date, notification, application_link, description)
    
    VALUES 
    ('$company_name','$job_role','$qualification','$salary','$location','$drive_date','$last_date','$notification','$application_link','$description')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Placement Added Successfully');</script>";
    }
    else
    {
        echo "<script>alert('Error adding placement');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Placement</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
}
/* Layout */
.dashboard{
    display:flex;
}

/* Sidebar */
.sidebar{
    width:250px;
    height:100vh;
    background:#2c3e50;
    position:fixed;
    left:0;
    top:0;
    padding-top:20px;
}

/* Sidebar links */
.sidebar a{
    display:block;
    padding:12px 20px;
    color:#ecf0f1;
    text-decoration:none;
    font-size:15px;
}

.sidebar a:hover{
    background:#34495e;
}

/* Main content */
.main{
    margin-left:250px;
    width:100%;
    padding:20px;
}

/* Container center */
.container{
    width:600px;
    margin:40px auto;
    background:#fff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}
h2{
text-align:center;
margin-bottom:20px;
}

input, select, textarea{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#2c3e50;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#1a252f;
}

</style>

</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    <?php include("sidebar.php"); ?>

    <!-- Main Content -->
    <div class="main">

        <div class="container">

            <h2>Add Placement</h2>

            <form method="POST">

                <label>Company Name</label>
                <input type="text" name="company_name" required>

                <label>Job Role</label>
                <input type="text" name="job_role" required>

                <label>Qualification</label>
                <input type="text" name="qualification">

                <label>Salary</label>
                <input type="text" name="salary">

                <label>Location</label>
                <input type="text" name="location">

                <label>Drive Date</label>
                <input type="date" name="drive_date">

                <label>Last Date</label>
                <input type="date" name="last_date">
                <label>Notification Link</label>
                <input type="text" name="notification">
                <label>Application Link</label>
                <input type="text" name="application_link">

                <label>Description</label>
                <textarea name="description"></textarea>

                <button type="submit" name="submit">Add Placement</button>

            </form>

        </div>

    </div>

</div>

</body>

</html>