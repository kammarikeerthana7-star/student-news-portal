<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="/student-news-portal/css/admindashboard.css">
</head>

<body>

<div class="dashboard">

    <?php include("sidebar.php"); ?>

    <div class="main">

        <div class="topbar">
            <h1>Welcome, Admin</h1>
        </div>

        <div class="cards">

            <div class="card">
                <h3>Govt Jobs</h3>
                <p>Manage government job posts</p>
            </div>

            <div class="card">
                <h3>Scholarships</h3>
                <p>Manage scholarship updates</p>
            </div>

            <div class="card">
                <h3>Results</h3>
                <p>Manage student results</p>
            </div>
            <div class="card">
                <h3>Sports</h3>
                <p>Manage sports events</p>
            </div>
                <div class="card">
                    <h3>Placements</h3>
                    <p>Manage student placements</p>
                    </div>
                    <div class="card">
                <h3>Articles</h3>
                <p>Manage articles</p>
            </div>


        </div>

    </div>

</div>
</body>
</html>