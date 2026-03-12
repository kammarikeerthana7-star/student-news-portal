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
    $job_title = $_POST['job_title'];
    $organization = $_POST['organization'];
    $location = $_POST['location'];
    $job_type = $_POST['job_type'];
    $qualification = $_POST['qualification'];
    $age_limit = $_POST['age_limit'];
    $start_date = $_POST['start_date'];
    $last_date = $_POST['last_date'];
    $website_link = $_POST['website_link'];
    $notification_link = $_POST['notification_link'];
    $description = $_POST['description'];

    $sql = "INSERT INTO govt_jobs 
    (job_title, organization, location, job_type, qualification, age_limit, start_date, last_date, website_link, notification_link, description)
    
    VALUES 
    ('$job_title','$organization','$location','$job_type','$qualification','$age_limit','$start_date','$last_date','$website_link','$notification_link','$description')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Government Job Added Successfully');</script>";
    }
    else
    {
        echo "<script>alert('Error adding job');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Government Job</title>

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

            <h2>Add Government Job</h2>

            <form method="POST">

                <label>Job Title</label>
                <input type="text" name="job_title" required>

                <label>Organization</label>
                <input type="text" name="organization" required>

                <label>Location</label>
                <input type="text" name="location">

                <label>Job Type</label>
                <select name="job_type">
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Contract">Contract</option>
                </select>

                <label>Qualification</label>
                <input type="text" name="qualification">

                <label>Age Limit</label>
                <input type="text" name="age_limit">

                <label>Start Date</label>
                <input type="date" name="start_date">

                <label>Last Date</label>
                <input type="date" name="last_date">

                <label>Website Link</label>
                <input type="text" name="website_link">

                <label>Notification Link</label>
                <input type="text" name="notification_link">

                <label>Description</label>
                <textarea name="description"></textarea>

                <button type="submit" name="submit">Add Job</button>

            </form>

        </div>

    </div>

</div>

</body>

</html>